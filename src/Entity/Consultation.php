<?php

namespace App\Entity;

use App\Repository\ConsultationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ConsultationRepository::class)]
class Consultation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\NotBlank(message:"date is required")]
    private ?\DateTimeInterface $date_consultation = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max :100,maxMessage : "Le diagnostique doit faire au maximum {{ limit }} caractères.")   ]
    private ?string $diagnostique = null;

    #[ORM\ManyToOne(inversedBy: 'consultations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Rdv $rdv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateConsultation(): ?\DateTimeInterface
    {
        return $this->date_consultation;
    }

    public function setDateConsultation(?\DateTimeInterface $date_consultation): self
    {
        $this->date_consultation = $date_consultation;

        return $this;
    }

    public function getDiagnostique(): ?string
    {
        return $this->diagnostique;
    }

    public function setDiagnostique(?string $diagnostique): self
    {
        $this->diagnostique = $diagnostique;

        return $this;
    }

    public function getRdv(): ?Rdv
    {
        return $this->rdv;
    }

    public function setRdv(?Rdv $rdv): self
    {
        $this->rdv = $rdv;

        return $this;
    }
}
