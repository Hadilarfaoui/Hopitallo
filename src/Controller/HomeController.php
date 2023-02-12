<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        return $this->render('home/login.html.twig');
    }

    #[Route('/hopital', name: 'hopital')]
    public function hopital(): Response
    {
        return $this->render('home/hopital.html.twig');
    }

    #[Route('/hopital_details', name: 'hopital_details')]
    public function hopital_details(): Response
    {
        return $this->render('home/hopital_details.html.twig');
    }

    #[Route('/medecin', name: 'medecin')]
    public function medecin(): Response
    {
        return $this->render('home/medecin.html.twig');
    }

    #[Route('/rdvC', name: 'rdv')]
    public function rdv(): Response
    {
        return $this->render('home/rendezvous.html.twig');
    }

    #[Route('/hopital_urgence', name: 'hopital_urgence')]
    public function hopital_urgence(): Response
    {
        return $this->render('home/hopital_urgence.html.twig');
    }

    #[Route('/urgence', name: 'urgence')]
    public function urgence(): Response
    {
        return $this->render('home/demande_urgence.html.twig');
    }

    #[Route('/event', name: 'event')]
    public function event(): Response
    {
        return $this->render('home/event.html.twig');
    }
    #[Route('/profil', name: 'profil')]
    public function profil(): Response
    {
        return $this->render('home/profil.html.twig');
    }
}
