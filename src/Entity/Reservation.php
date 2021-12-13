<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=CentreDeBeaute::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $centredebeaute;

    /**
     * @ORM\ManyToOne(targetEntity=MusiqueDeMariage::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $musiquedemariage;

    /**
     * @ORM\ManyToOne(targetEntity=SalleDeMariage::class)
     */
    private $salledemariage;

    /**
     * @ORM\ManyToOne(targetEntity=Photographe::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $photographe;

    /**
     * @ORM\Column(type="float")
     */
    private $budget;

    /**
     * @ORM\ManyToOne(targetEntity=Reservation::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="time")
     */
    private $time;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMusiquedemariage(): ?MusiqueDeMariage
    {
        return $this->musiquedemariage;
    }

    public function setMusiquedemariage(?MusiqueDeMariage $musiquedemariage): self
    {
        $this->musiquedemariage = $musiquedemariage;

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

    public function getPhotographe(): ?Photographe
    {
        return $this->photographe;
    }

    public function setPhotographe(?Photographe $photographe): self
    {
        $this->photographe = $photographe;

        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getAdmin(): ?self
    {
        return $this->admin;
    }

    public function setAdmin(?self $admin): self
    {
        $this->admin = $admin;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }
}
