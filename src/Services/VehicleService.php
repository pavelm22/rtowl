<?php

namespace App\Services;

use App\Entity\Interface\VehicleInterface;
use App\Entity\Vehicle;
use App\Repository\TeamRepository;
use App\Repository\VehicleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class VehicleService extends AbstractCrudService
{
    private VehicleRepository $vehicleRepository;
    private TeamRepository $teamRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        VehicleRepository $vehicleRepository,
        TeamRepository $teamRepository
    ) {
        parent::__construct($entityManager, $serializer);
        $this->vehicleRepository = $vehicleRepository;
        $this->teamRepository = $teamRepository;
    }

    protected function getRepository(): VehicleRepository
    {
        return $this->vehicleRepository;
    }

    protected function createEntityInstance(): VehicleInterface
    {
        return new Vehicle();
    }

    protected function updateEntityFields($entity, array $data)
    {
        if (isset($data['name'])) {
            $entity->setName($data['name']);
        }

        if (isset($data['description'])) {
            $entity->setDescription($data['description']);
        }

        if (isset($data['specs'])) {
            $entity->setSpecs($data['specs']);
        }

        if (isset($data['teamId'])) {
            $team = $this->teamRepository->find($data['teamId']);
            if ($team) {
                $entity->setTeam($team);
            }
        }

        return $entity;
    }
}