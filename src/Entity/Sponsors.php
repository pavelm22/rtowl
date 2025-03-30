<?php

namespace App\Entity;

use App\Entity\Interface\SponsorsInterface;
use App\Repository\SponsorsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SponsorsRepository::class)]
class Sponsors implements SponsorsInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column]
    private ?bool $priority = null;

    #[ORM\Column]
    private ?int $OrderNum = null;

    /**
     * @var Collection<int, Team>
     */
    #[ORM\ManyToMany(targetEntity: Team::class, inversedBy: 'sponsors')]
    private Collection $SupportedTeams;

    /**
     * @var Collection<int, Vehicle>
     */
    #[ORM\ManyToMany(targetEntity: Vehicle::class, inversedBy: 'sponsors')]
    private Collection $SponsoredVehicles;

    public function __construct()
    {
        $this->SupportedTeams = new ArrayCollection();
        $this->SponsoredVehicles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): SponsorsInterface
    {
        $this->Name = $Name;

        return $this;
    }

    public function isPriority(): ?bool
    {
        return $this->priority;
    }

    public function setPriority(bool $priority): SponsorsInterface
    {
        $this->priority = $priority;

        return $this;
    }

    public function getOrderNum(): ?int
    {
        return $this->OrderNum;
    }

    public function setOrderNum(int $OrderNum): SponsorsInterface
    {
        $this->OrderNum = $OrderNum;

        return $this;
    }

    /**
     * @return Collection<int, Team>
     */
    public function getSupportedTeams(): Collection
    {
        return $this->SupportedTeams;
    }

    public function addSupportedTeam(Team $supportedTeam): SponsorsInterface
    {
        if (!$this->SupportedTeams->contains($supportedTeam)) {
            $this->SupportedTeams->add($supportedTeam);
            $supportedTeam->addSponsor($this);
        }

        return $this;
    }

    public function removeSupportedTeam(Team $supportedTeam): SponsorsInterface
    {
        if ($this->SupportedTeams->removeElement($supportedTeam)) {
            $supportedTeam->removeSponsor($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Vehicle>
     */
    public function getSponsoredVehicles(): Collection
    {
        return $this->SponsoredVehicles;
    }

    public function addSponsoredVehicle(Vehicle $sponsoredVehicle): SponsorsInterface
    {
        if (!$this->SponsoredVehicles->contains($sponsoredVehicle)) {
            $this->SponsoredVehicles->add($sponsoredVehicle);
            $sponsoredVehicle->addSponsor($this);
        }

        return $this;
    }

    public function removeSponsoredVehicle(Vehicle $sponsoredVehicle): SponsorsInterface
    {
        if ($this->SponsoredVehicles->removeElement($sponsoredVehicle)) {
            $sponsoredVehicle->removeSponsor($this);
        }

        return $this;
    }
}