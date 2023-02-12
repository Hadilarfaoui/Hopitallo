<?php

namespace App\Entity;

use App\Repository\DemandeUrgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeUrgenceRepository::class)]
class DemandeUrgence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_u = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cas_urgence = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'urgences')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hopital $hopital = null;

    #[ORM\ManyToOne(inversedBy: 'urgence_demande')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $patient = null;

    #[ORM\ManyToOne(inversedBy: 'urgence_gerer')]
    private ?User $medecin = null;

    #[ORM\OneToMany(mappedBy: 'demandeUrgence', targetEntity: ConsultationUrgence::class)]
    private Collection $consultation_u;

    public function __construct()
    {
        $this->consultation_u = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresseU(): ?string
    {
        return $this->adresse_u;
    }

    public function setAdresseU(string $adresse_u): self
    {
        $this->adresse_u = $adresse_u;

        return $this;
    }

    public function getCasUrgence(): ?string
    {
        return $this->cas_urgence;
    }

    public function setCasUrgence(?string $cas_urgence): self
    {
        $this->cas_urgence = $cas_urgence;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHopital(): ?Hopital
    {
        return $this->hopital;
    }

    public function setHopital(?Hopital $hopital): self
    {
        $this->hopital = $hopital;

        return $this;
    }

    public function getPatient(): ?User
    {
        return $this->patient;
    }

    public function setPatient(?User $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    public function getMedecin(): ?User
    {
        return $this->medecin;
    }

    public function setMedecin(?User $medecin): self
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * @return Collection<int, ConsultationUrgence>
     */
    public function getConsultationU(): Collection
    {
        return $this->consultation_u;
    }

    public function addConsultationU(ConsultationUrgence $consultationU): self
    {
        if (!$this->consultation_u->contains($consultationU)) {
            $this->consultation_u->add($consultationU);
            $consultationU->setDemandeUrgence($this);
        }

        return $this;
    }

    public function removeConsultationU(ConsultationUrgence $consultationU): self
    {
        if ($this->consultation_u->removeElement($consultationU)) {
            // set the owning side to null (unless already changed)
            if ($consultationU->getDemandeUrgence() === $this) {
                $consultationU->setDemandeUrgence(null);
            }
        }

        return $this;
    }
}
