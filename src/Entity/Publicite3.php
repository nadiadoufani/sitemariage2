<?php

namespace App\Entity;

use App\Repository\Publicite3Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Publicite3Repository::class)
 */
class Publicite3
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity=Coiffure::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $coiffure;

    /**
     * @ORM\ManyToOne(targetEntity=Costume::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $costume;

    /**
     * @ORM\ManyToOne(targetEntity=VoyageDeNoce::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $voyagedenoce;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

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

    public function getCostume(): ?Costume
    {
        return $this->costume;
    }

    public function setCostume(?Costume $costume): self
    {
        $this->costume = $costume;

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
