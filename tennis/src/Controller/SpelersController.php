<?php

namespace App\Controller;

use App\Entity\Spelers;
use App\Form\SpelersType;
use App\Repository\SpelersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/spelers')]
class SpelersController extends AbstractController
{
    #[Route('/', name: 'app_spelers_index', methods: ['GET'])]
    public function index(SpelersRepository $spelersRepository): Response
    {
        return $this->render('spelers/index.html.twig', [
            'spelers' => $spelersRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_spelers_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SpelersRepository $spelersRepository): Response
    {
        $speler = new Spelers();
        $form = $this->createForm(SpelersType::class, $speler);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $spelersRepository->add($speler);
            return $this->redirectToRoute('app_spelers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('spelers/new.html.twig', [
            'speler' => $speler,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_spelers_show', methods: ['GET'])]
    public function show(Spelers $speler): Response
    {
        return $this->render('spelers/show.html.twig', [
            'speler' => $speler,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_spelers_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Spelers $speler, SpelersRepository $spelersRepository): Response
    {
        $form = $this->createForm(SpelersType::class, $speler);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $spelersRepository->add($speler);
            return $this->redirectToRoute('app_spelers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('spelers/edit.html.twig', [
            'speler' => $speler,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_spelers_delete', methods: ['POST'])]
    public function delete(Request $request, Spelers $speler, SpelersRepository $spelersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$speler->getId(), $request->request->get('_token'))) {
            $spelersRepository->remove($speler);
        }

        return $this->redirectToRoute('app_spelers_index', [], Response::HTTP_SEE_OTHER);
    }
}
