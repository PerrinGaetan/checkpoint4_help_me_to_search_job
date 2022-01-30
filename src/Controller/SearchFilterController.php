<?php

namespace App\Controller;

use App\Entity\SearchFilter;
use App\Form\SearchFilterType;
use App\Repository\SearchFilterRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/search/filter")
 */
class SearchFilterController extends AbstractController
{
    /**
     * @Route("/", name="search_filter_index", methods={"GET"})
     */
    public function index(SearchFilterRepository $searchFilterRepository): Response
    {
        return $this->render('search_filter/index.html.twig', [
            'search_filters' => $searchFilterRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="search_filter_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $searchFilter = new SearchFilter();
        $form = $this->createForm(SearchFilterType::class, $searchFilter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($searchFilter);
            $entityManager->flush();

            return $this->redirectToRoute('search_filter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('search_filter/new.html.twig', [
            'search_filter' => $searchFilter,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="search_filter_show", methods={"GET"})
     */
    public function show(SearchFilter $searchFilter): Response
    {
        return $this->render('search_filter/show.html.twig', [
            'search_filter' => $searchFilter,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="search_filter_edit", methods={"GET", "POST"})
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
     * @Route("/{id}", name="search_filter_delete", methods={"POST"})
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