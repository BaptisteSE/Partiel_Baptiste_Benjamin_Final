<?php

namespace App\Entity;

use App\Repository\UtilisationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UtilisationRepository::class)
 */
class Utilisation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date") 
     */
    private $datedemande;

    /**
     * @ORM\Column(type="datetime") 
     * @Assert\GreaterThanOrEqual("today", message="Attention, la date de début doit être ultérieure à la date d'aujourd'hui")
     */
    private $datedebut;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\GreaterThan(propertyPath="datedebut",
     *  message="Attention, la date de fin doit être postérieure à la date de début !")
     */
    private $datefin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity=Vehicule::class, inversedBy="destination")
     */
    private $vehicule;

    /**
     * @ORM\ManyToOne(targetEntity=Destination::class, inversedBy="utilisations")
     */
    private $destination;

    /**
     * @ORM\ManyToOne(targetEntity=Motifrefus::class, inversedBy="utilisations")
     */
    private $motifrefus;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="utilisations")
     */
    private $personne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatedemande(): ?\DateTimeInterface
    {
        return $this->datedemande;
    }

    public function setDatedemande(\DateTimeInterface $datedemande): self
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getVehicule(): ?vehicule
    {
        return $this->vehicule;
    }

    public function setVehicule(?vehicule $vehicule): self
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getDestination(): ?destination
    {
        return $this->destination;
    }

    public function setDestination(?destination $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getMotifrefus(): ?motifrefus
    {
        return $this->motifrefus;
    }

    public function setMotifrefus(?motifrefus $motifrefus): self
    {
        $this->motifrefus = $motifrefus;

        return $this;
    }

    public function getPersonne(): ?personne
    {
        return $this->personne;
    }

    public function setPersonne(?personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }
}
