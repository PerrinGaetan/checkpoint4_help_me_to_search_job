<?php

namespace App\Service;

use App\Entity\Application;
use DateTime;

class SaveApplicationService
{
    public function save($user, $jobOffer, $entityManager)
    {
        if (null !== $user) {
            $newApplication = new Application();
            $newApplication->setCompany($jobOffer->getCompany());
            $newApplication->setContactName($jobOffer->getContact());
            $newApplication->setTypeOfCompany($jobOffer->getTypeOfCompany());
            $newApplication->setDescription($jobOffer->getDescription());
            $newApplication->setApplicationDate(new DateTime('now'));
            $newApplication->setCity($jobOffer->getCity());
            $newApplication->setEmail($jobOffer->getEmail());
            $newApplication->setPhone($jobOffer->getPhone());
            $newApplication->setUser($user);
            $entityManager->persist($newApplication);
            $entityManager->flush();
        }
    }
}