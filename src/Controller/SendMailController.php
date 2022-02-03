<?php

namespace App\Controller;

use App\Entity\Application;
use App\Entity\JobOffer;
use App\Form\MailingApplicationType;
use App\Repository\ApplicationRepository;
use App\Repository\JobOfferRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class SendMailController extends AbstractController
{
    /**
     * @Route("/send/mail/{offerId}", name="send_mail", methods={"GET", "POST"})
     */
    public function index($offerId, Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, JobOfferRepository $jobOfferRepository): Response
    {
        $jobOffer = $jobOfferRepository->findOneBy(['id' => $offerId]);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $mail = (new Email())
                ->from($_POST['userEmail'])
                ->to('ibanez2@hotmail.fr')
                ->subject($_POST['topic'])
                ->html('<p>'. $_POST['mailBody'] . '</p>')
                ->attachFromPath($_FILES['cv']['name']);
            $mailer->send($mail);
            if ($this->getUser()) {
                $newApplication = new Application();
                $newApplication->setCompany($jobOffer->getCompany());
                $newApplication->setContactName($jobOffer->getContact());
                $newApplication->setTypeOfCompany($jobOffer->getTypeOfCompany());
                $newApplication->setDescription($jobOffer->getDescription());
                $newApplication->setApplicationDate(new DateTime('now'));
                $newApplication->setCity($jobOffer->getCity());
                $newApplication->setEmail($jobOffer->getEmail());
                $newApplication->setPhone($jobOffer->getPhone());
                $newApplication->setUser($this->getUser());
                $entityManager->persist($newApplication);
                $entityManager->flush();
            }

            return $this->redirectToRoute('search_filter_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('send_mail/index.html.twig', [
            'offerJob' => $jobOffer,
        ]);
    }
}
