<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hopital;
use App\Repository\HopitalRepository;
use App\Entity\Service;
use App\Repository\ServiceRepository;
use App\Repository\UserRepository;


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

    #[Route('/hopitalC', name: 'hopital')]
    public function hopital(HopitalRepository $hopitalRepository): Response
    {
        return $this->render('home/hopital.html.twig',[            
            'hopitals' => $hopitalRepository->findAll(),
    ]);
    }

    #[Route('/{id}/hopital_details', name: 'hopital_details', methods: ['GET'])]
    public function hopital_details(ServiceRepository $serviceRepository,Hopital $hopital): Response
    {
        return $this->render('home/hopital_details.html.twig',[
            'hopital' => $hopital,'services' => $serviceRepository->findAll(),
        ]);
    }

    #[Route('/{id}/medecin', name: 'medecin', methods: ['GET'])]
    public function medecin(UserRepository $userRepository,Service $service): Response
    {
        return $this->render('home/medecin.html.twig',[
            'service' => $service,'medecins' => $userRepository->findAll(),
        ]);
    }

    #[Route('/rdv', name: 'rdv')]
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
