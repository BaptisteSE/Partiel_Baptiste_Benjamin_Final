<?php

namespace App\Entity;

use App\Repository\HistoriqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HistoriqueRepository::class)
 */
class Historique
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
     * @ORM\Column(type="date")
     */
    private $datedebut;

    /**
     * @ORM\Column(type="date")
     */
    private $datefin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="integer")
     */
    private $vehicule_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $destination_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $personne_id;

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

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getVehiculeId(): ?int
    {
        return $this->vehicule_id;
    }

    public function setVehiculeId(int $vehicule_id): self
    {
        $this->vehicule_id = $vehicule_id;

        return $this;
    }

    public function getDestinationId(): ?int
    {
        return $this->destination_id;
    }

    public function setDestinationId(int $destination_id): self
    {
        $this->destination_id = $destination_id;

        return $this;
    }

    public function getPersonneId(): ?int
    {
        return $this->personne_id;
    }

    public function setPersonneId(int $personne_id): self
    {
        $this->personne_id = $personne_id;

        return $this;
    }
}
