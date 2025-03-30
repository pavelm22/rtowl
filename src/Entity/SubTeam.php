<?php

namespace App\Entity;

use App\Entity\Interface\SubTeamInterface;
use App\Repository\SubTeamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubTeamRepository::class)]
class SubTeam implements SubTeamInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    /**
     * @var Collection<int, TeamMember>
     */
    #[ORM\OneToMany(targetEntity: TeamMember::class, mappedBy: 'SubTeam')]
    private Collection $teamMembers;

    #[ORM\ManyToOne(inversedBy: 'SubTeams')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Team $team = null;

    public function __construct()
    {
        $this->teamMembers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): SubTeamInterface
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): SubTeamInterface
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection<int, TeamMember>
     */
    public function getTeamMembers(): Collection
    {
        return $this->teamMembers;
    }

    public function addTeamMember(TeamMember $teamMember): SubTeamInterface
    {
        if (!$this->teamMembers->contains($teamMember)) {
            $this->teamMembers->add($teamMember);
            $teamMember->setSubTeam($this);
        }

        return $this;
    }

    public function removeTeamMember(TeamMember $teamMember): SubTeamInterface
    {
        if ($this->teamMembers->removeElement($teamMember)) {
            // set the owning side to null (unless already changed)
            if ($teamMember->getSubTeam() === $this) {
                $teamMember->setSubTeam(null);
            }
        }

        return $this;
    }

    public function getTeam(): ?Team
    {
        return $this->team;
    }

    public function setTeam(?Team $team): SubTeamInterface
    {
        $this->team = $team;

        return $this;
    }
}