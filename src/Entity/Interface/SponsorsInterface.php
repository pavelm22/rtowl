<?php

namespace App\Entity\Interface;

use App\Entity\Team;
use App\Entity\Vehicle;
use Doctrine\Common\Collections\Collection;

interface SponsorsInterface
{
    public function getId(): ?int;

    public function getName(): ?string;

    /**
     * @return SponsorsInterface
     */
    public function setName(string $Name): SponsorsInterface;

    public function isPriority(): ?bool;

    /**
     * @return SponsorsInterface
     */
    public function setPriority(bool $priority): SponsorsInterface;

    public function getOrderNum(): ?int;

    /**
     * @return SponsorsInterface
     */
    public function setOrderNum(int $OrderNum): SponsorsInterface;

    /**
     * @return Collection<int, Team>
     */
    public function getSupportedTeams(): Collection;

    /**
     * @return SponsorsInterface
     */
    public function addSupportedTeam(Team $supportedTeam): SponsorsInterface;

    /**
     * @return SponsorsInterface
     */
    public function removeSupportedTeam(Team $supportedTeam): SponsorsInterface;

    /**
     * @return Collection<int, Vehicle>
     */
    public function getSponsoredVehicles(): Collection;

    /**
     * @return SponsorsInterface
     */
    public function addSponsoredVehicle(Vehicle $sponsoredVehicle): SponsorsInterface;

    /**
     * @return SponsorsInterface
     */
    public function removeSponsoredVehicle(Vehicle $sponsoredVehicle): SponsorsInterface;
}