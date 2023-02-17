<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminDashboardController extends AbstractController
{
    #[Route('/', name: 'app_admin_dashboard')]
    public function index(): Response
    {
        return $this->render('admin_dashboard/index.html.twig', [
            'controller_name' => 'AdminDashboardController',
        ]);
    }

    #[Route('/event_admin', name: 'event_admin')]
    public function event_admin(): Response
    {
        return $this->render('admin_dashboard/gestion_event.html.twig');
    }

    #[Route('/hopitaux_admin', name: 'hopitaux_admin')]
    public function hopitaux_admin(): Response
    {
        return $this->render('admin_dashboard/gestion_hopitaux.html.twig');
    }

    #[Route('/participant_admin', name: 'participant_admin')]
    public function participant_admin(): Response
    {
        return $this->render('admin_dashboard/gestion_participant.html.twig', [
            'controller_name' => 'AdminDashboardController',
        ]);
    }

    #[Route('/service_admin', name: 'service_admin')]
    public function service_admin(): Response
    {
        return $this->render('admin_dashboard/gestion_services.html.twig', [
            'controller_name' => 'AdminDashboardController',
        ]);
    }

    #[Route('/utilisateur_admin', name: 'utilisateur_admin')]
    public function utilisateur_admin(UserRepository $userRepository): Response
    {
        return $this->render('admin_dashboard/gestion_utilisateur.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
}
