<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_naissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column]
    private ?int $telephone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dossier = null;

    #[ORM\Column(nullable: true)]
    private ?int $disponible_debut = null;

    #[ORM\Column(nullable: true)]
    private ?int $disponible_fin = null;

    #[ORM\ManyToOne(inversedBy: 'medecins')]
    private ?Service $service = null;

    #[ORM\OneToMany(mappedBy: 'patient', targetEntity: Rdv::class, orphanRemoval: true)]
    private Collection $rdv_prendre;

    #[ORM\OneToMany(mappedBy: 'medecin', targetEntity: Rdv::class)]
    private Collection $rdv_gerer;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Participant::class, orphanRemoval: true)]
    private Collection $parti;

    #[ORM\OneToMany(mappedBy: 'patient', targetEntity: DemandeUrgence::class)]
    private Collection $urgence_demande;

    #[ORM\OneToMany(mappedBy: 'medecin', targetEntity: DemandeUrgence::class)]
    private Collection $urgence_gerer;

    public function __construct()
    {   // $this->Demande_urgence = new ArrayCollection();
        // $this->gerer_demande = new ArrayCollection();
        $this->rdv_prendre = new ArrayCollection();
        $this->rdv_gerer = new ArrayCollection();
        $this->parti = new ArrayCollection();
        $this->urgence_demande = new ArrayCollection();
        $this->urgence_gerer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(?\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getDossier(): ?string
    {
        return $this->dossier;
    }

    public function setDossier(?string $dossier): self
    {
        $this->dossier = $dossier;

        return $this;
    }

    public function getDisponibleDebut(): ?int
    {
        return $this->disponible_debut;
    }

    public function setDisponibleDebut(?int $disponible_debut): self
    {
        $this->disponible_debut = $disponible_debut;

        return $this;
    }

    public function getDisponibleFin(): ?int
    {
        return $this->disponible_fin;
    }

    public function setDisponibleFin(?int $disponible_fin): self
    {
        $this->disponible_fin = $disponible_fin;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return Collection<int, DemandeUrgence>
     */
    // public function getDemandeUrgence(): Collection
    // {
    //     return $this->Demande_urgence;
    // }

    // public function addDemandeUrgence(DemandeUrgence $demandeUrgence): self
    // {
    //     if (!$this->Demande_urgence->contains($demandeUrgence)) {
    //         $this->Demande_urgence->add($demandeUrgence);
    //         $demandeUrgence->setPatient($this);
    //     }

    //     return $this;
    // }

    // public function removeDemandeUrgence(DemandeUrgence $demandeUrgence): self
    // {
    //     if ($this->Demande_urgence->removeElement($demandeUrgence)) {
    //         // set the owning side to null (unless already changed)
    //         if ($demandeUrgence->getPatient() === $this) {
    //             $demandeUrgence->setPatient(null);
    //         }
    //     }

    //     return $this;
    // }

    /**
     * @return Collection<int, Rdv>
     */
    public function getRdvPrendre(): Collection
    {
        return $this->rdv_prendre;
    }

    public function addRdvPrendre(Rdv $rdvPrendre): self
    {
        if (!$this->rdv_prendre->contains($rdvPrendre)) {
            $this->rdv_prendre->add($rdvPrendre);
            $rdvPrendre->setPatient($this);
        }

        return $this;
    }

    public function removeRdvPrendre(Rdv $rdvPrendre): self
    {
        if ($this->rdv_prendre->removeElement($rdvPrendre)) {
            // set the owning side to null (unless already changed)
            if ($rdvPrendre->getPatient() === $this) {
                $rdvPrendre->setPatient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Rdv>
     */
    public function getRdvGerer(): Collection
    {
        return $this->rdv_gerer;
    }

    public function addRdvGerer(Rdv $rdvGerer): self
    {
        if (!$this->rdv_gerer->contains($rdvGerer)) {
            $this->rdv_gerer->add($rdvGerer);
            $rdvGerer->setMedecin($this);
        }

        return $this;
    }

    public function removeRdvGerer(Rdv $rdvGerer): self
    {
        if ($this->rdv_gerer->removeElement($rdvGerer)) {
            // set the owning side to null (unless already changed)
            if ($rdvGerer->getMedecin() === $this) {
                $rdvGerer->setMedecin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Participant>
     */
    public function getParti(): Collection
    {
        return $this->parti;
    }

    public function addParti(Participant $parti): self
    {
        if (!$this->parti->contains($parti)) {
            $this->parti->add($parti);
            $parti->setUser($this);
        }

        return $this;
    }

    public function removeParti(Participant $parti): self
    {
        if ($this->parti->removeElement($parti)) {
            // set the owning side to null (unless already changed)
            if ($parti->getUser() === $this) {
                $parti->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DemandeUrgence>
     */
    public function getUrgenceDemande(): Collection
    {
        return $this->urgence_demande;
    }

    public function addUrgenceDemande(DemandeUrgence $urgenceDemande): self
    {
        if (!$this->urgence_demande->contains($urgenceDemande)) {
            $this->urgence_demande->add($urgenceDemande);
            $urgenceDemande->setPatient($this);
        }

        return $this;
    }

    public function removeUrgenceDemande(DemandeUrgence $urgenceDemande): self
    {
        if ($this->urgence_demande->removeElement($urgenceDemande)) {
            // set the owning side to null (unless already changed)
            if ($urgenceDemande->getPatient() === $this) {
                $urgenceDemande->setPatient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DemandeUrgence>
     */
    public function getUrgenceGerer(): Collection
    {
        return $this->urgence_gerer;
    }

    public function addUrgenceGerer(DemandeUrgence $urgenceGerer): self
    {
        if (!$this->urgence_gerer->contains($urgenceGerer)) {
            $this->urgence_gerer->add($urgenceGerer);
            $urgenceGerer->setMedecin($this);
        }

        return $this;
    }

    public function removeUrgenceGerer(DemandeUrgence $urgenceGerer): self
    {
        if ($this->urgence_gerer->removeElement($urgenceGerer)) {
            // set the owning side to null (unless already changed)
            if ($urgenceGerer->getMedecin() === $this) {
                $urgenceGerer->setMedecin(null);
            }
        }

        return $this;
    }

    public function __toString(){
        //return  (string) var_dump( $this->getRoles()); // Remplacer champ par une propriété "string" de l'entité
        return (string) $this->getId();
    }
}
