<?php

namespace App\Controller;

use App\Entity\Application;
use App\Entity\JobOffer;
use App\Repository\ApplicationRepository;
use App\Repository\JobOfferRepository;
use App\Service\SaveApplicationService;
use App\Service\SendMailService;
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
    public function index($offerId, Request $request, EntityManagerInterface $entityManager, JobOfferRepository $jobOfferRepository, SendMailService $sendMail, MailerInterface $mailer, SaveApplicationService $saveApplicationService): Response
    {
        $jobOffer = $jobOfferRepository->findOneBy(['id' => $offerId]);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $sendMail->send($mailer);
            $this->addFlash('success', 'Votre candidature a bien été envoyé');

            $user = $this->getUser();
            if ($user !== null) {
                $saveApplicationService->save($user, $jobOffer, $entityManager);
                $this->addFlash('success', 'Votre candidature a bien été sauvegardé dans votre liste de candidature');
            }

            return $this->redirectToRoute('search_filter_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('send_mail/index.html.twig', [
            'offerJob' => $jobOffer,
        ]);
    }
}
