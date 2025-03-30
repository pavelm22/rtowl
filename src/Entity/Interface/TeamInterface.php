<?php

namespace App\Entity\Interface;

use App\Entity\Sponsors;
use App\Entity\SubTeam;
use App\Entity\Vehicle;
use Doctrine\Common\Collections\Collection;

interface TeamInterface
{
    /**
     * Get the team ID
     */
    public function getId(): ?int;

    /**
     * Get the team year
     */
    public function getYear(): ?string;

    /**
     * Set the team year
     *
     * @param string $Year The team year
     * @return TeamInterface
     */
    public function setYear(string $Year): TeamInterface;

    /**
     * Get the team name
     */
    public function getName(): ?string;

    /**
     * Set the team name
     *
     * @param string $Name The team name
     * @return TeamInterface
     */
    public function setName(string $Name): TeamInterface;

    /**
     * Get the associated vehicle
     */
    public function getVehicle(): ?Vehicle;

    /**
     * Set the associated vehicle
     *
     * @param Vehicle|null $vehicle The vehicle to associate
     * @return TeamInterface
     */
    public function setVehicle(?Vehicle $vehicle): TeamInterface;

    /**
     * Get all subteams
     *
     * @return Collection<int, SubTeam>
     */
    public function getSubTeams(): Collection;

    /**
     * Add a subteam
     *
     * @param SubTeam $subTeam The subteam to add
     * @return TeamInterface
     */
    public function addSubTeam(SubTeam $subTeam): TeamInterface;

    /**
     * Remove a subteam
     *
     * @param SubTeam $subTeam The subteam to remove
     * @return TeamInterface
     */
    public function removeSubTeam(SubTeam $subTeam): TeamInterface;

    /**
     * Get all sponsors
     *
     * @return Collection<int, Sponsors>
     */
    public function getSponsors(): Collection;

    /**
     * Add a sponsor
     *
     * @param Sponsors $sponsor The sponsor to add
     * @return TeamInterface
     */
    public function addSponsor(Sponsors $sponsor): TeamInterface;

    /**
     * Remove a sponsor
     *
     * @param Sponsors $sponsor The sponsor to remove
     * @return TeamInterface
     */
    public function removeSponsor(Sponsors $sponsor): TeamInterface;
}