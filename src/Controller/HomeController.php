<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserTypefront;
use App\Repository\UserRepository;
use App\Entity\Service;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


#[Route('/home')] 
class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
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

    #[Route('/{id}/edit', name: 'app_user_edit_front', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository ,SluggerInterface $slugger ,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $form = $this->createForm(UserTypefront::class, $user);
        $form->handleRequest($request);
        $user->setRoles(['ROLE_USER']);

        if ($form->isSubmitted() && $form->isValid()) {
               //  /** @var UploadedFile $photo */
               $photo = $form->get('photo')->getData();

               if ($photo) {
                   $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
              
                   $safeFilename = $slugger->slug($originalFilename);
                   $newFilename = $safeFilename.'-'.uniqid().'.'.$photo->guessExtension();
  
                   try {
                       $photo->move(
                           $this->getParameter('user_directory'),
                           $newFilename
                       );
                   } catch (FileException $e) {
                       // ... handle exception if something happens during file upload
                   }
   
                   $user->setPhoto($newFilename);
                  }

                // dossier
            $dossier = $form->get('dossier')->getData();

            if ($dossier) {
                $originalFilename2 = pathinfo($dossier->getClientOriginalName(), PATHINFO_FILENAME);
           
                $safeFilename2 = $slugger->slug($originalFilename2);
                $newFilename2 = $safeFilename2.'-'.uniqid().'.'.$dossier->guessExtension();

                try {
                    $dossier->move(
                        $this->getParameter('user_directory'),
                        $newFilename2
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $user->setDossier($newFilename2);
               }   
                $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                ));
            $userRepository->save($user, true);

            return $this->redirectToRoute('profil', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('home/user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
}


