<?php

namespace App\Entity;

use App\Repository\ConsultationUrgenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ConsultationUrgenceRepository::class)]
class ConsultationUrgence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:"heure is required")]
    private ?string $heure = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\NotBlank(message:"date is required")]
    private ?\DateTimeInterface $date_consultation = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:"diagnostic is required")]
    private ?string $diagnostic = null;

    #[ORM\ManyToOne(inversedBy: 'consultation_u')]
    #[ORM\JoinColumn(nullable: false)]
    private ?DemandeUrgence $demandeUrgence = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(?string $heure): self
    {
        $this->heure = $heure;

        return $this;
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

    public function getDiagnostic(): ?string
    {
        return $this->diagnostic;
    }

    public function setDiagnostic(?string $diagnostic): self
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }

    public function getDemandeUrgence(): ?DemandeUrgence
    {
        return $this->demandeUrgence;
    }

    public function setDemandeUrgence(?DemandeUrgence $demandeUrgence): self
    {
        $this->demandeUrgence = $demandeUrgence;

        return $this;
    }
}
