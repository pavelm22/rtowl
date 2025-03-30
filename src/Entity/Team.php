<?php

namespace App\Entity;

use App\Entity\Interface\TeamInterface;
use App\Repository\TeamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team implements TeamInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['team:read', 'team:list', 'vehicle:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['team:read', 'team:list', 'vehicle:read'])]
    private ?string $Year = null;

    #[ORM\Column(length: 255)]
    #[Groups(['team:read', 'team:list', 'vehicle:read'])]
    private ?string $Name = null;

    #[ORM\OneToOne(mappedBy: 'Team', cascade: ['persist', 'remove'])]
    #[Groups(['team:read'])]
    #[MaxDepth(1)]
    private ?Vehicle $vehicle = null;

    /**
     * @var Collection<int, SubTeam>
     */
    #[ORM\OneToMany(targetEntity: SubTeam::class, mappedBy: 'team')]
    #[Groups(['team:read'])]
    #[MaxDepth(1)]
    private Collection $SubTeams;

    /**
     * @var Collection<int, Sponsors>
     */
    #[ORM\ManyToMany(targetEntity: Sponsors::class, mappedBy: 'SupportedTeams')]
    #[Groups(['team:read'])]
    #[MaxDepth(1)]
    private Collection $sponsors;

    public function __construct()
    {
        $this->SubTeams = new ArrayCollection();
        $this->sponsors = new ArrayCollection();
    }

    #[Groups(['team:read', 'team:list', 'vehicle:read'])]
    public function getId(): ?int
    {
        return $this->id;
    }

    #[Groups(['team:read', 'team:list', 'vehicle:read'])]
    public function getYear(): ?string
    {
        return $this->Year;
    }

    public function setYear(string $Year): TeamInterface
    {
        $this->Year = $Year;

        return $this;
    }

    #[Groups(['team:read', 'team:list', 'vehicle:read'])]
    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): TeamInterface
    {
        $this->Name = $Name;

        return $this;
    }

    #[Groups(['team:read'])]
    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?Vehicle $vehicle): TeamInterface
    {
        // unset the owning side of the relation if necessary
        if ($vehicle === null && $this->vehicle !== null) {
            $this->vehicle->setTeam(null);
        }

        // set the owning side of the relation if necessary
        if ($vehicle !== null && $vehicle->getTeam() !== $this) {
            $vehicle->setTeam($this);
        }

        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * @return Collection<int, SubTeam>
     */
    #[Groups(['team:read'])]
    public function getSubTeams(): Collection
    {
        return $this->SubTeams;
    }

    public function addSubTeam(SubTeam $subTeam): TeamInterface
    {
        if (!$this->SubTeams->contains($subTeam)) {
            $this->SubTeams->add($subTeam);
            $subTeam->setTeam($this);
        }

        return $this;
    }

    public function removeSubTeam(SubTeam $subTeam): TeamInterface
    {
        if ($this->SubTeams->removeElement($subTeam)) {
            // set the owning side to null (unless already changed)
            if ($subTeam->getTeam() === $this) {
                $subTeam->setTeam(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Sponsors>
     */
    #[Groups(['team:read'])]
    public function getSponsors(): Collection
    {
        return $this->sponsors;
    }

    public function addSponsor(Sponsors $sponsor): TeamInterface
    {
        if (!$this->sponsors->contains($sponsor)) {
            $this->sponsors->add($sponsor);
            $sponsor->addSupportedTeam($this);
        }

        return $this;
    }

    public function removeSponsor(Sponsors $sponsor): TeamInterface
    {
        if ($this->sponsors->removeElement($sponsor)) {
            $sponsor->removeSupportedTeam($this);
        }

        return $this;
    }
}