<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_utilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

   

    /**
     * @ORM\ManyToOne(targetEntity=SalleDeMariage::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $salledemariage;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Traiteurs::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $traiteurs;

    /**
     * @ORM\ManyToOne(targetEntity=MusiqueDeMariage::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $musiquedemariage;

    /**
     * @ORM\ManyToOne(targetEntity=Photographe::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $photographe;

    /**
     * @ORM\ManyToOne(targetEntity=Costume::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $costume;

    /**
     * @ORM\ManyToOne(targetEntity=Coiffure::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $coiffure;

    /**
     * @ORM\ManyToOne(targetEntity=CentreDeBeaute::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $centredebeaute;

    /**
     * @ORM\ManyToOne(targetEntity=VoyageDeNoce::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $voyagedenoce;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur(string $nom_utilisateur): self
    {
        $this->nom_utilisateur = $nom_utilisateur;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getSalledemariage(): ?SalleDeMariage
    {
        return $this->salledemariage;
    }

    public function setSalledemariage(?SalleDeMariage $salledemariage): self
    {
        $this->salledemariage = $salledemariage;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getTraiteurs(): ?Traiteurs
    {
        return $this->traiteurs;
    }

    public function setTraiteurs(?Traiteurs $traiteurs): self
    {
        $this->traiteurs = $traiteurs;

        return $this;
    }

    public function getMusiquedemariage(): ?MusiqueDeMariage
    {
        return $this->musiquedemariage;
    }

    public function setMusiquedemariage(?MusiqueDeMariage $musiquedemariage): self
    {
        $this->musiquedemariage = $musiquedemariage;

        return $this;
    }

    public function getPhotographe(): ?Photographe
    {
        return $this->photographe;
    }

    public function setPhotographe(?Photographe $photographe): self
    {
        $this->photographe = $photographe;

        return $this;
    }

    public function getCostume(): ?Costume
    {
        return $this->costume;
    }

    public function setCostume(?Costume $costume): self
    {
        $this->costume = $costume;

        return $this;
    }

    public function getCoiffure(): ?Coiffure
    {
        return $this->coiffure;
    }

    public function setCoiffure(?Coiffure $coiffure): self
    {
        $this->coiffure = $coiffure;

        return $this;
    }

    public function getCentredebeaute(): ?CentreDeBeaute
    {
        return $this->centredebeaute;
    }

    public function setCentredebeaute(?CentreDeBeaute $centredebeaute): self
    {
        $this->centredebeaute = $centredebeaute;

        return $this;
    }

    public function getVoyagedenoce(): ?VoyageDeNoce
    {
        return $this->voyagedenoce;
    }

    public function setVoyagedenoce(?VoyageDeNoce $voyagedenoce): self
    {
        $this->voyagedenoce = $voyagedenoce;

        return $this;
    }
}
