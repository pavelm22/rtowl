<?php

namespace App\Entity\Interface;

use App\Entity\Team;
use App\Entity\Sponsors;
use Doctrine\Common\Collections\Collection;

interface VehicleInterface
{
    public function getId(): ?int;

    public function getName(): ?string;

    /**
     * @return VehicleInterface
     */
    public function setName(string $Name): VehicleInterface;

    public function getDescription(): ?string;

    /**
     * @return VehicleInterface
     */
    public function setDescription(string $Description): VehicleInterface;

    public function getSpecs(): array;

    /**
     * @return VehicleInterface
     */
    public function setSpecs(array $Specs): VehicleInterface;

    public function getTeam(): ?Team;

    /**
     * @return VehicleInterface
     */
    public function setTeam(?Team $Team): VehicleInterface;

    /**
     * @return Collection<int, Sponsors>
     */
    public function getSponsors(): Collection;

    /**
     * @return VehicleInterface
     */
    public function addSponsor(Sponsors $sponsor): VehicleInterface;

    /**
     * @return VehicleInterface
     */
    public function removeSponsor(Sponsors $sponsor): VehicleInterface;
}