<?php

namespace App\Controller;

use App\Entity\Architect;
use App\Form\ArchitectType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/architect")
 */
class ArchitectController extends AbstractController
{
    /**
     * @Route("/", name="app_architect_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $architects = $entityManager
            ->getRepository(Architect::class)
            ->findAll();

        return $this->render('architect/index.html.twig', [
            'architects' => $architects,
        ]);
    }

    /**
     * @Route("/new", name="app_architect_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $architect = new Architect();
        $form = $this->createForm(ArchitectType::class, $architect);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($architect);
            $entityManager->flush();

            return $this->redirectToRoute('app_architect_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('architect/new.html.twig', [
            'architect' => $architect,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_architect_show", methods={"GET"})
     */
    public function show(Architect $architect): Response
    {
        return $this->render('architect/show.html.twig', [
            'architect' => $architect,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_architect_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Architect $architect, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArchitectType::class, $architect);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_architect_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('architect/edit.html.twig', [
            'architect' => $architect,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_architect_delete", methods={"POST"})
     */
    public function delete(Request $request, Architect $architect, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$architect->getId(), $request->request->get('_token'))) {
            $entityManager->remove($architect);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_architect_index', [], Response::HTTP_SEE_OTHER);
    }
}
