<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/medecin')]
class MedecinDashboardController extends AbstractController
{
    #[Route('/medecin_dashboard', name: 'app_medecin_dashboard')]
    public function index(): Response
    {
        return $this->render('medecin_dashboard/index.html.twig', [
            'controller_name' => 'MedecinDashboardController',
        ]);
    }

    #[Route('/medecin_profil', name: 'medecin_profil')]
    public function medecin_profil(): Response
    {
        return $this->render('medecin_dashboard/profil_medecin.html.twig');
    }

    #[Route('/medecin_rdv', name: 'medecin_rdv')]
    public function medecin_rdv(): Response
    {
        return $this->render('medecin_dashboard/gestion_rdv_medecin.html.twig');
    }

    #[Route('/medecin_urgence', name: 'medecin_urgence')]
    public function medecin_urgence(): Response
    {
        return $this->render('medecin_dashboard/gestion_urgence_medecin.html.twig');
    }
}
