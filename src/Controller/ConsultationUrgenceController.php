<?php

namespace App\Controller;

use App\Entity\ConsultationUrgence;
use App\Form\ConsultationUrgenceType;
use App\Repository\ConsultationUrgenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/consultation/urgence')]
class ConsultationUrgenceController extends AbstractController
{
    #[Route('/', name: 'app_consultation_urgence_index', methods: ['GET'])]
    public function index(ConsultationUrgenceRepository $consultationUrgenceRepository): Response
    {
        return $this->render('consultation_urgence/index.html.twig', [
            'consultation_urgences' => $consultationUrgenceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_consultation_urgence_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ConsultationUrgenceRepository $consultationUrgenceRepository): Response
    {
        $consultationUrgence = new ConsultationUrgence();
        $form = $this->createForm(ConsultationUrgenceType::class, $consultationUrgence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $consultationUrgenceRepository->save($consultationUrgence, true);

            return $this->redirectToRoute('app_consultation_urgence_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('consultation_urgence/new.html.twig', [
            'consultation_urgence' => $consultationUrgence,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_consultation_urgence_show', methods: ['GET'])]
    public function show(ConsultationUrgence $consultationUrgence): Response
    {
        return $this->render('consultation_urgence/show.html.twig', [
            'consultation_urgence' => $consultationUrgence,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_consultation_urgence_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ConsultationUrgence $consultationUrgence, ConsultationUrgenceRepository $consultationUrgenceRepository): Response
    {
        $form = $this->createForm(ConsultationUrgenceType::class, $consultationUrgence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $consultationUrgenceRepository->save($consultationUrgence, true);

            return $this->redirectToRoute('app_consultation_urgence_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('consultation_urgence/edit.html.twig', [
            'consultation_urgence' => $consultationUrgence,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_consultation_urgence_delete', methods: ['POST'])]
    public function delete(Request $request, ConsultationUrgence $consultationUrgence, ConsultationUrgenceRepository $consultationUrgenceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$consultationUrgence->getId(), $request->request->get('_token'))) {
            $consultationUrgenceRepository->remove($consultationUrgence, true);
        }

        return $this->redirectToRoute('app_consultation_urgence_index', [], Response::HTTP_SEE_OTHER);
    }
}
