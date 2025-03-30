<?php

namespace App\Entity\Interface;

use App\Entity\SubTeam;

interface TeamMemberInterface
{
    public function getId(): ?int;

    public function getVorname(): ?string;

    /**
     * @return TeamMemberInterface
     */
    public function setVorname(string $Vorname): TeamMemberInterface;

    public function getName(): ?string;

    /**
     * @return TeamMemberInterface
     */
    public function setName(string $Name): TeamMemberInterface;

    public function getEmail(): ?string;

    /**
     * @return TeamMemberInterface
     */
    public function setEmail(string $Email): TeamMemberInterface;

    public function getPosition(): ?string;

    /**
     * @return TeamMemberInterface
     */
    public function setPosition(string $Position): TeamMemberInterface;

    public function getSubTeam(): ?SubTeam;

    /**
     * @return TeamMemberInterface
     */
    public function setSubTeam(?SubTeam $SubTeam): TeamMemberInterface;
}