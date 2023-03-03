<?php

namespace App\Controller;

use App\Entity\Hopital;
use App\Form\HopitalType;
use App\Repository\HopitalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;



#[Route('/hopital')]
class HopitalController extends AbstractController
{
    #[Route('/', name: 'app_hopital_index', methods: ['GET'])]
    public function index(HopitalRepository $hopitalRepository): Response
    {
        return $this->render('hopital/index.html.twig', [
            'hopitals' => $hopitalRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_hopital_new', methods: ['GET', 'POST'])]
    public function new(Request $request, HopitalRepository $hopitalRepository,SluggerInterface $slugger): Response
    {
        $hopital = new Hopital();
        $form = $this->createForm(HopitalType::class, $hopital);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //sart img
            $image = $form->get('image')->getData();
            if($image){
                $originelFilename = pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originelFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                try{
                    $image->move(
                        $this->getParameter('hopitauximage'),
                        $newFilename
                    );
                }catch (FileException $e){

                }$hopital->setImage($newFilename);
            }
            
            //end image
            $hopitalRepository->save($hopital, true);

            return $this->redirectToRoute('app_hopital_index', [], Response::HTTP_SEE_OTHER);
        }
        $this->addFlash('info', 'Hôpital ajouté avec succès');
        return $this->renderForm('hopital/new.html.twig', [
            'hopital' => $hopital,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_hopital_show', methods: ['GET'])]
    public function show(Hopital $hopital): Response
    {
        return $this->render('hopital/show.html.twig', [
            'hopital' => $hopital,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_hopital_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Hopital $hopital, HopitalRepository $hopitalRepository,SluggerInterface $slugger): Response
    {
        $form = $this->createForm(HopitalType::class, $hopital);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //sart img
            $image = $form->get('image')->getData();
            if($image){
                $originelFilename = pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originelFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                try{
                    $image->move(
                        $this->getParameter('hopitauximage'),
                        $newFilename
                    );
                }catch (FileException $e){

                }$hopital->setImage($newFilename);
            }
            
            //end image
            $hopitalRepository->save($hopital, true);

            return $this->redirectToRoute('app_hopital_index', [], Response::HTTP_SEE_OTHER);
        }
        $this->addFlash('info', 'Hôpital modifié avec succès');
        return $this->renderForm('hopital/edit.html.twig', [
            'hopital' => $hopital,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_hopital_delete', methods: ['POST'])]
    public function delete(Request $request, Hopital $hopital, HopitalRepository $hopitalRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hopital->getId(), $request->request->get('_token'))) {
            $hopitalRepository->remove($hopital, true);
        }
        $this->addFlash('info', 'Hôpital supprimé avec succès');
        return $this->redirectToRoute('app_hopital_index', [], Response::HTTP_SEE_OTHER);
    }
}
