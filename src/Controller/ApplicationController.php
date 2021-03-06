<?php

namespace App\Controller;

use App\Entity\Application;
use App\Entity\User;
use App\Form\ApplicationType;
use App\Repository\ApplicationRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/mes-candidatures", name="application_")
 */
class ApplicationController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET", "POST"})
     */
    public function index(ApplicationRepository $applicationRepository): Response
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $search = $_POST['searchApplication'];
            /** @var User $user */
            $user = $this->getUser();
            $userId = $user->getId();
            return $this->render('application/index.html.twig', [
                'applications' => $applicationRepository->findByName($_POST['searchApplication'], $userId ),
            ]);
        }
        return $this->render('application/index.html.twig', [
            'applications' => $applicationRepository->findBy(['user' => $this->getUser()]),
        ]);
    }

    /**
     * @Route("/nouvelle-candidature", name="new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $application = new Application();
        $form = $this->createForm(ApplicationType::class, $application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $application->setApplicationDate(new DateTime('now'));
            $entityManager->persist($application);
            $entityManager->flush();

            return $this->redirectToRoute('application_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('application/new.html.twig', [
            'application' => $application,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(Application $application): Response
    {
        return $this->render('application/show.html.twig', [
            'application' => $application,
        ]);
    }

    /**
     * @Route("/{id}/modifier", name="edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Application $application, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ApplicationType::class, $application, ['hasResponse' => true, 'interviewResume' =>true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $application->setRelaunchDate(new DateTime('now'));
            $entityManager->flush();

            return $this->redirectToRoute('application_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('application/edit.html.twig', [
            'application' => $application,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete(Request $request, Application $application, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$application->getId(), $request->request->get('_token'))) {
            $entityManager->remove($application);
            $entityManager->flush();
        }

        return $this->redirectToRoute('application_index', [], Response::HTTP_SEE_OTHER);
    }
}
