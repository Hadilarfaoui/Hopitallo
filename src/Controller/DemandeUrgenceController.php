<?php

namespace App\Controller;

use App\Entity\DemandeUrgence;
use App\Form\DemandeUrgenceType;
use App\Repository\DemandeUrgenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/demande/urgence')]
class DemandeUrgenceController extends AbstractController
{
    #[Route('/', name: 'app_demande_urgence_index', methods: ['GET'])]
    public function index(DemandeUrgenceRepository $demandeUrgenceRepository): Response
    {
        return $this->render('demande_urgence/index.html.twig', [
            'demande_urgences' => $demandeUrgenceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_demande_urgence_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DemandeUrgenceRepository $demandeUrgenceRepository): Response
    {
        $demandeUrgence = new DemandeUrgence();
        $form = $this->createForm(DemandeUrgenceType::class, $demandeUrgence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $demandeUrgenceRepository->save($demandeUrgence, true);

            $this->addFlash('success', 'votre demande Urgence a envoyer avec success');
            return $this->redirectToRoute('app_demande_urgence_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('demande_urgence/new.html.twig', [
            'demande_urgence' => $demandeUrgence,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_urgence_show', methods: ['GET'])]
    public function show(DemandeUrgence $demandeUrgence): Response
    {
        return $this->render('demande_urgence/show.html.twig', [
            'demande_urgence' => $demandeUrgence,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_demande_urgence_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DemandeUrgence $demandeUrgence, DemandeUrgenceRepository $demandeUrgenceRepository): Response
    {
        $form = $this->createForm(DemandeUrgenceType::class, $demandeUrgence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $demandeUrgenceRepository->save($demandeUrgence, true);

            return $this->redirectToRoute('app_demande_urgence_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('demande_urgence/edit.html.twig', [
            'demande_urgence' => $demandeUrgence,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demande_urgence_delete', methods: ['POST'])]
    public function delete(Request $request, DemandeUrgence $demandeUrgence, DemandeUrgenceRepository $demandeUrgenceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demandeUrgence->getId(), $request->request->get('_token'))) {
            $demandeUrgenceRepository->remove($demandeUrgence, true);
        }

        return $this->redirectToRoute('app_demande_urgence_index', [], Response::HTTP_SEE_OTHER);
    }
}
