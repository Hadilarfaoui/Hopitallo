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
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

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
    public function hopital(HopitalRepository $hopitalRepository,Request $request): Response
    {   
        $criteria = [];

        if ($request->query->get('type_conference')) {
            $criteria['type_conference'] = true;
        }

        if ($request->query->get('type_workshop')) {
            $criteria['type_workshop'] = true;
        }
       
        if ($request->query->get('filter_by_adresse')) {
            $adresseh = $request->query->get('filter_by_adresse');
            $criteria['filter_by_adresse'] = $adresseh;
        }

        $hopitals = $hopitalRepository->findFiltered($criteria);

        return $this->render('home/hopital.html.twig',[            
            'hopitals' => $hopitals,
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

    #[Route('/star/{id}', name: 'star')]
    public function yourAction(Request $request,$id,ManagerRegistry $doctrine)
    {
        if ($request->isXmlHttpRequest()) {
            // handle the AJAX request
            $data = $request->getContent(); // retrieve the data sent by the client-side JavaScript code
            $repository = $doctrine->getRepository(Hopital::class);
            $produits = $repository->find($id);
            if($produits->getNote()==0)
                $produits->setNote(5);
            else
                $produits->setNote(($produits->getNote()+$data[6])/2);//modifier la note du produit
            $em=$doctrine->getManager();
            $em->persist($produits);
            $em->flush();
            $prod = $repository->find($id);
            $test=$prod->getNote();
            $response = new Response();//nouvelle instance du response pour la renvoyer a la fonction ajax
            $response->setContent(json_encode($test));//encoder les donnes sous forme JSON et les attribuer a la variable response
            $response->headers->set('Content-Type', 'application/json');
            return $response;//envoie du response
        } 
    }
}
