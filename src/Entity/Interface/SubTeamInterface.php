<?php

namespace App\Entity\Interface;

use App\Entity\Team;
use App\Entity\TeamMember;
use Doctrine\Common\Collections\Collection;

interface SubTeamInterface
{
    public function getId(): ?int;

    public function getName(): ?string;

    /**
     * @return SubTeamInterface
     */
    public function setName(string $Name): SubTeamInterface;

    public function getDescription(): ?string;

    /**
     * @return SubTeamInterface
     */
    public function setDescription(?string $Description): SubTeamInterface;

    /**
     * @return Collection<int, TeamMember>
     */
    public function getTeamMembers(): Collection;

    /**
     * @return SubTeamInterface
     */
    public function addTeamMember(TeamMember $teamMember): SubTeamInterface;

    /**
     * @return SubTeamInterface
     */
    public function removeTeamMember(TeamMember $teamMember): SubTeamInterface;

    public function getTeam(): ?Team;

    /**
     * @return SubTeamInterface
     */
    public function setTeam(?Team $team): SubTeamInterface;
}