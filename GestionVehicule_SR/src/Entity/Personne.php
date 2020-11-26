<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 */
class Personne
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
    private $prenom;

    /**
     * @ORM\OneToMany(targetEntity=Utilisation::class, mappedBy="personne")
     */
    private $utilisations;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class, inversedBy="personnes")
     */
    private $service;

    public function __construct()
    {
        $this->utilisations = new ArrayCollection();
    }

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection|Utilisation[]
     */
    public function getUtilisations(): Collection
    {
        return $this->utilisations;
    }

    public function addUtilisation(Utilisation $utilisation): self
    {
        if (!$this->utilisations->contains($utilisation)) {
            $this->utilisations[] = $utilisation;
            $utilisation->setPersonne($this);
        }

        return $this;
    }

    public function removeUtilisation(Utilisation $utilisation): self
    {
        if ($this->utilisations->removeElement($utilisation)) {
            // set the owning side to null (unless already changed)
            if ($utilisation->getPersonne() === $this) {
                $utilisation->setPersonne(null);
            }
        }

        return $this;
    }

    public function getService(): ?service
    {
        return $this->service;
    }

    public function setService(?service $service): self
    {
        $this->service = $service;

        return $this;
    }
}
