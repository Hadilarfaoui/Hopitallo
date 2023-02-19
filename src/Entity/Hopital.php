<?php

namespace App\Entity;

use App\Repository\HopitalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[UniqueEntity(fields: ['numeroh'], message: 'Cet hôpital déjà existe')]
#[ORM\Entity(repositoryClass: HopitalRepository::class)]
class Hopital
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Nom is required")]
    private ?string $nomh = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Adresse is required")]
    private ?string $adresseh = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Numero is required")]
    #[Assert\Length(min:8,minMessage:"Votre numéro contient moins que {{ limit }} chiffres.")]
    #[Assert\Length(max:8,maxMessage:"Votre numéro contient plus que {{ limit }} chiffres.")]
    private ?int $numeroh = null;

    #[ORM\Column(length: 255)]
    private ?string $typeh = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'hopital', targetEntity: Service::class, orphanRemoval: true)]
    private Collection $services;

    #[ORM\OneToMany(mappedBy: 'hopital', targetEntity: DemandeUrgence::class)]
    private Collection $urgences;


    public function __construct()
    {
        $this->services = new ArrayCollection();
        $this->urgences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomh(): ?string
    {
        return $this->nomh;
    }

    public function setNomh(string $nomh): self
    {
        $this->nomh = $nomh;

        return $this;
    }

    public function getAdresseh(): ?string
    {
        return $this->adresseh;
    }

    public function setAdresseh(string $adresseh): self
    {
        $this->adresseh = $adresseh;

        return $this;
    }

    public function getNumeroh(): ?int
    {
        return $this->numeroh;
    }

    public function setNumeroh(int $numeroh): self
    {
        $this->numeroh = $numeroh;

        return $this;
    }

    public function getTypeh(): ?string
    {
        return $this->typeh;
    }

    public function setTypeh(string $typeh): self
    {
        $this->typeh = $typeh;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Service>
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    public function addService(Service $service): self
    {
        if (!$this->services->contains($service)) {
            $this->services->add($service);
            $service->setHopital($this);
        }

        return $this;
    }

    public function removeService(Service $service): self
    {
        if ($this->services->removeElement($service)) {
            // set the owning side to null (unless already changed)
            if ($service->getHopital() === $this) {
                $service->setHopital(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DemandeUrgence>
     */
    public function getUrgences(): Collection
    {
        return $this->urgences;
    }

    public function addUrgence(DemandeUrgence $urgence): self
    {
        if (!$this->urgences->contains($urgence)) {
            $this->urgences->add($urgence);
            $urgence->setHopital($this);
        }

        return $this;
    }

    public function removeUrgence(DemandeUrgence $urgence): self
    {
        if ($this->urgences->removeElement($urgence)) {
            // set the owning side to null (unless already changed)
            if ($urgence->getHopital() === $this) {
                $urgence->setHopital(null);
            }
        }

        return $this;
    }

    public function __toString(){
        //return  (string) var_dump( $this->getRoles()); // Remplacer champ par une propriété "string" de l'entité
        return (string) $this->getNomh();
    }
}
