<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="vehiculedisponible")
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 */
class Vehicule
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
    private $immatriculation;

    /**
     * @ORM\OneToMany(targetEntity=Utilisation::class, mappedBy="vehicule")
     */
    private $utilisations;

    public function __construct()
    {
        $this->utilisations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * @return Collection|Utilisation[]
     */
    public function getDestination(): Collection
    {
        return $this->destination;
    }

    public function addDestination(Utilisation $destination): self
    {
        if (!$this->destination->contains($destination)) {
            $this->destination[] = $destination;
            $destination->setVehicule($this);
        }

        return $this;
    }

    public function removeDestination(Utilisation $destination): self
    {
        if ($this->destination->removeElement($destination)) {
            // set the owning side to null (unless already changed)
            if ($destination->getVehicule() === $this) {
                $destination->setVehicule(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return $this->immatriculation;
    }
}
