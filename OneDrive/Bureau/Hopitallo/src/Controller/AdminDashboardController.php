<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin', name: 'app_admin_dashboard')]
    public function index(): Response
    {
        return $this->render('admin_dashboard/index.html.twig', [
            'controller_name' => 'AdminDashboardController',
        ]);
    }

    #[Route('/event_admin', name: 'event_admin')]
    public function event_admin(): Response
    {
        
        return $this->redirectToRoute('app_admin_event_index');
    }

    #[Route('/hopitaux_admin', name: 'hopitaux_admin')]
    public function hopitaux_admin(): Response
    {
        return $this->render('admin_dashboard/gestion_hopitaux.html.twig');
    }

    #[Route('/participant_admin', name: 'participant_admin')]
    public function participant_admin(): Response
    {
        return $this->redirectToRoute('app_admin_participant_index');
    }

    #[Route('/service_admin', name: 'service_admin')]
    public function service_admin(): Response
    {
        return $this->render('admin_dashboard/gestion_services.html.twig', [
            'controller_name' => 'AdminDashboardController',
        ]);
    }

    #[Route('/utilisateur_admin', name: 'utilisateur_admin')]
    public function utilisateur_admin(): Response
    {
        return $this->render('admin_dashboard/gestion_utilisateur.html.twig', [
            'controller_name' => 'AdminDashboardController',
        ]);
    }
}
