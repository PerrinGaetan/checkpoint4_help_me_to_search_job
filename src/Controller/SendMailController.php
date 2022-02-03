<?php

namespace App\Controller;

use App\Form\MailingApplicationType;
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
     * @Route("/send/mail", name="send_mail")
     */
    public function index(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
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
        ]);
    }
}
