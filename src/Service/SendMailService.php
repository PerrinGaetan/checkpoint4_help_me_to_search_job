<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SendMailService
{
    public function send(MailerInterface $mailer)
    {
        $mail = (new Email())
                ->from($_POST['userEmail'])
                ->to('ibanez2@hotmail.fr')
                ->subject($_POST['topic'])
                ->html('<p>'. $_POST['mailBody'] . '</p>')
                ->attachFromPath($_FILES['cv']['name']);
            $mailer->send($mail);
    }
}