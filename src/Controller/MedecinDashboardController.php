<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserTypeMedecin;
use App\Repository\UserRepository;
use App\Entity\Service;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ServiceRepository;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

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

    #[Route('/{id}/edit', name: 'app_medecin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository ,SluggerInterface $slugger ,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $form = $this->createForm(UserTypeMedecin::class, $user);
        $form->handleRequest($request);
        $user->setRoles(['ROLE_MEDECIN']);

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

            return $this->redirectToRoute('medecin_profil', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('medecin_dashboard/user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

}
