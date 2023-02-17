<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Entity\Service;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/admin/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        $repository = $this->getDoctrine()->getRepository(User::class);

        $query = $repository->createQueryBuilder('u')
            ->join('u.service', 's')
            ->join('s.hopital', 'h')
            ->getQuery();

            $result= $query->getResult();
       
        return $this->render('admin_dashboard/user/index.html.twig', [
            'medecin' =>  $result, 'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository ,SluggerInterface $slugger ,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

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
                )
            );
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_dashboard/user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('admin_dashboard/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository ,SluggerInterface $slugger,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

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

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_dashboard/user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
