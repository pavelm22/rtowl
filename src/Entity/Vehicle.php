<?php

namespace App\Entity;

use App\Entity\Interface\VehicleInterface;
use App\Repository\VehicleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
class Vehicle implements VehicleInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column]
    private array $Specs = [];

    #[ORM\OneToOne(inversedBy: 'vehicle', cascade: ['persist', 'remove'])]
    private ?Team $Team = null;

    /**
     * @var Collection<int, Sponsors>
     */
    #[ORM\ManyToMany(targetEntity: Sponsors::class, mappedBy: 'SponsoredVehicles')]
    private Collection $sponsors;

    public function __construct()
    {
        $this->sponsors = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): VehicleInterface
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): VehicleInterface
    {
        $this->Description = $Description;

        return $this;
    }

    public function getSpecs(): array
    {
        return $this->Specs;
    }

    public function setSpecs(array $Specs): VehicleInterface
    {
        $this->Specs = $Specs;

        return $this;
    }

    public function getTeam(): ?Team
    {
        return $this->Team;
    }

    public function setTeam(?Team $Team): VehicleInterface
    {
        // Unset the owning side of the relation if necessary
        if ($Team === null && $this->Team !== null) {
            $this->Team->setVehicle(null);
        }

        // Set the owning side of the relation if necessary
        if ($Team !== null && $Team->getVehicle() !== $this) {
            $Team->setVehicle($this);
        }

        $this->Team = $Team;

        return $this;
    }

    /**
     * @return Collection<int, Sponsors>
     */
    public function getSponsors(): Collection
    {
        return $this->sponsors;
    }

    public function addSponsor(Sponsors $sponsor): VehicleInterface
    {
        if (!$this->sponsors->contains($sponsor)) {
            $this->sponsors->add($sponsor);
            $sponsor->addSponsoredVehicle($this);
        }

        return $this;
    }

    public function removeSponsor(Sponsors $sponsor): VehicleInterface
    {
        if ($this->sponsors->removeElement($sponsor)) {
            $sponsor->removeSponsoredVehicle($this);
        }

        return $this;
    }
}