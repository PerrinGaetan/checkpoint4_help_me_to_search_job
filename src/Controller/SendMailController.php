<?php

namespace App\Controller;

use App\Entity\JobOffer;
use App\Form\MailingApplicationType;
use App\Repository\JobOfferRepository;
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



            return $this->redirectToRoute('search_filter_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('send_mail/index.html.twig', [
            'offerJob' => $jobOffer,
        ]);
    }
}
