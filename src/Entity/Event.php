<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_e = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_event = null;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: Participant::class)]
    private Collection $participate;

    public function __construct()
    {
        $this->participate = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomE(): ?string
    {
        return $this->nom_e;
    }

    public function setNomE(string $nom_e): self
    {
        $this->nom_e = $nom_e;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->date_event;
    }

    public function setDateEvent(\DateTimeInterface $date_event): self
    {
        $this->date_event = $date_event;

        return $this;
    }

    /**
     * @return Collection<int, Participant>
     */
    public function getParticipate(): Collection
    {
        return $this->participate;
    }

    public function addParticipate(Participant $participate): self
    {
        if (!$this->participate->contains($participate)) {
            $this->participate->add($participate);
            $participate->setEvent($this);
        }

        return $this;
    }

    public function removeParticipate(Participant $participate): self
    {
        if ($this->participate->removeElement($participate)) {
            // set the owning side to null (unless already changed)
            if ($participate->getEvent() === $this) {
                $participate->setEvent(null);
            }
        }

        return $this;
    }
}
