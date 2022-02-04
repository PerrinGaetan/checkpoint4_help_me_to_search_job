<?php

namespace App\Controller;

use App\Entity\JobOffer;
use App\Entity\SearchFilter;
use App\Form\SearchFilterType;
use App\Repository\JobOfferRepository;
use App\Repository\SearchFilterRepository;
use App\Service\APIService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/rechercher", name="search_filter_")
 */
class SearchFilterController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(SearchFilterRepository $searchFilterRepository): Response
    {
        return $this->render('search_filter/index.html.twig', [
            'search_filters' => $searchFilterRepository->findBy(['user' => $this->getUser()]),
        ]);
    }

    /**
     * @Route("/nouvelle-recherche", name="new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,
    JobOfferRepository $jobOfferRepository, SearchFilterRepository $searchFilterRepository, APIService $aPIService): Response
    {
        if ($this->getUser()) {
            $myFilters = $searchFilterRepository->findBy(['user' => $this->getUser()]);
        }  else {
            $myFilters = "";
        }
        $searchFilter = new SearchFilter();
        $form = $this->createForm(SearchFilterType::class, $searchFilter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            if (isset($_POST['myFilter']) && $_POST['myFilter'] !== "") {
                $filter = $searchFilterRepository->findOneBy(['title' => $_POST['myFilter']]);
            $resultByJob = $jobOfferRepository->findByFilter($filter);
            } else {
                $resultByJob = $jobOfferRepository->findByFilter($data);
                if ($form['title']->getData()) {
                    $searchFilter->setUser($this->getUser());
                    $entityManager->persist($searchFilter);
                    $entityManager->flush();
                }
            }

            return $this->renderForm('search_filter/new.html.twig', [
                'search_filter' => $searchFilter,
                'form' => $form,
                'result' => $resultByJob,
                'myFilters' => $myFilters,
            ]);
            // return $this->redirectToRoute('search_filter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('search_filter/new.html.twig', [
            'search_filter' => $searchFilter,
            'form' => $form,
            'myFilters' => $myFilters,
            'result' => $aPIService->fetchAllOffer(),
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(JobOffer $jobOffer): Response
    {
        return $this->render('search_filter/show.html.twig', [
            'job' => $jobOffer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, SearchFilter $searchFilter, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SearchFilterType::class, $searchFilter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('search_filter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('search_filter/edit.html.twig', [
            'search_filter' => $searchFilter,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete(Request $request, SearchFilter $searchFilter, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$searchFilter->getId(), $request->request->get('_token'))) {
            $entityManager->remove($searchFilter);
            $entityManager->flush();
        }

        return $this->redirectToRoute('search_filter_index', [], Response::HTTP_SEE_OTHER);
    }
}
