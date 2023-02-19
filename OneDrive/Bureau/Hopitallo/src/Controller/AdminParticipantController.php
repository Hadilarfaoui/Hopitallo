<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Entity\User;
use App\Entity\Event;
use App\Form\ParticipantType;
use App\Repository\EventRepository;
use App\Repository\ParticipantRepository;
use App\Repository\UserRepository;
use DateTimeImmutable;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/participant')]
class AdminParticipantController extends AbstractController
{
    #[Route('/', name: 'app_admin_participant_index', methods: ['GET'])]
    public function index(ParticipantRepository $participantRepository): Response
    {
        
        return $this->render('admin_participant/index.html.twig', [
            'participants' => $participantRepository->findAll(),
        ]);
    }


    #[Route('/event/{id}/{idu}/add-participant', name: 'event_add_participant', methods: ['GET', 'POST'])]
    public function addParticipantToEvent(ManagerRegistry $doctrine,UserRepository $UserRepository ,EventRepository $EventRepository,
                                         ParticipantRepository $participantRepository,Request $request,$id,$idu)
    {
     $user = $UserRepository->find($idu);
    $event= $EventRepository->find($id);
     // Or retrieve the participant you want to add
    
    $participant = new Participant();
    $participant->setUser($user); // Or set the participant you want to add
    $participant->setEvent($event);
    $participant->setCreatedAt(new DateTimeImmutable());

    $entityManager = $doctrine->getManager();
    $entityManager->persist($participant);
    $entityManager->flush();
    
   // return $this->redirectToRoute('app_admin_event_show', ['id' => $event->getId()]);
    return $this->redirectToRoute('event');
    }

    #[Route('/new', name: 'app_admin_participant_new')]
    public function new(Request $request, ParticipantRepository $participantRepository): Response
    {
        $participant = new Participant();
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participantRepository->save($participant, true);
            return $this->redirectToRoute('app_admin_participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_participant/new.html.twig', [
            'participant' => $participant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_participant_show', methods: ['GET'])]
    public function show(Participant $participant): Response
    {
        return $this->render('admin_participant/show.html.twig', [
            'participant' => $participant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_participant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participant $participant, ParticipantRepository $participantRepository): Response
    {
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participantRepository->save($participant, true);

            return $this->redirectToRoute('app_admin_participant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_participant/edit.html.twig', [
            'participant' => $participant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_participant_delete', methods: ['POST'])]
    public function delete(Request $request, Participant $participant, ParticipantRepository $participantRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participant->getId(), $request->request->get('_token'))) {
            $participantRepository->remove($participant, true);
        }

        return $this->redirectToRoute('app_admin_participant_index', [], Response::HTTP_SEE_OTHER);
    }

    // #[Route('/parti-evnt{id}', name: 'app_admin_event_show_parti', methods: ['GET'])]
    // public function indexp(ParticipantRepository $participantRepository,EventRepository $eventRepository,$id): Response
    // {
    //     $event= $eventRepository->find($id);
        
    //     return $this->render('admin_participant/index.html.twig', [
    //         'participants' => $participantRepository->Participants($event),
    //     ]);
    // }
    #[Route('/participant/event{ide}', name: 'app_admin_participant_index1', methods: ['GET'])]
    public function eventpart (ParticipantRepository $participantRepository,$ide): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $event = $entityManager->getRepository(Event::class)->find($ide);
        $part = $entityManager->getRepository(Participant::class)->findBy(['event'=>$event]);
        return $this->render('admin_participant/index.html.twig', [
            'participants' => $part,
        ]);
    }


   
   
}
