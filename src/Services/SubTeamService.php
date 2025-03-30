<?php

namespace App\Services;

use App\Entity\Interface\SubTeamInterface;
use App\Entity\SubTeam;
use App\Repository\SubTeamRepository;
use App\Repository\TeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class SubTeamService extends AbstractCrudService
{
    private SubTeamRepository $subTeamRepository;
    private TeamRepository $teamRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        SubTeamRepository $subTeamRepository,
        TeamRepository $teamRepository
    ) {
        parent::__construct($entityManager, $serializer);
        $this->subTeamRepository = $subTeamRepository;
        $this->teamRepository = $teamRepository;
    }

    protected function getRepository(): SubTeamRepository
    {
        return $this->subTeamRepository;
    }

    protected function createEntityInstance(): SubTeamInterface
    {
        return new SubTeam();
    }

    protected function updateEntityFields($entity, array $data)
    {
        if (isset($data['name'])) {
            $entity->setName($data['name']);
        }

        if (isset($data['description'])) {
            $entity->setDescription($data['description']);
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