<?php

namespace App\Services;

use App\Entity\Interface\TeamInterface;
use App\Entity\Team;
use App\Repository\SubTeamRepository;
use App\Repository\TeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class TeamService extends AbstractCrudService
{
    private TeamRepository $teamRepository;
    private SubTeamRepository $subTeamRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        TeamRepository $teamRepository,
        SubTeamRepository $subTeamRepository
    ) {
        parent::__construct($entityManager, $serializer);
        $this->teamRepository = $teamRepository;
        $this->subTeamRepository = $subTeamRepository;
    }

    protected function getRepository(): TeamRepository
    {
        return $this->teamRepository;
    }

    protected function createEntityInstance(): TeamInterface
    {
        return new Team();
    }

    protected function updateEntityFields($entity, array $data)
    {
        if (isset($data['year'])) {
            $entity->setYear($data['year']);
        }

        if (isset($data['name'])) {
            $entity->setName($data['name']);
        }

        return $entity;
    }

    public function getTeamDetailsById(int $id): ?array
    {
        $team = $this->getById($id);

        if (!$team) {
            return null;
        }

        $subTeams = $this->subTeamRepository->findBy(['team' => $team]);
        $result = [];

        foreach ($subTeams as $subTeam) {
            $subTeamData = [
                'subTeam' => $subTeam->getName(),
                'members' => []
            ];

            if ($subTeam->getDescription()) {
                $subTeamData['description'] = $subTeam->getDescription();
            }

            foreach ($subTeam->getTeamMembers() as $member) {
                $subTeamData['members'][] = [
                    'name' => $member->getName(),
                    'position' => $member->getPosition() ?? 'Teamcrew',
                    'imagePath' => $member->getImgPath()
                ];
            }

            $result[] = $subTeamData;
        }

        return $result;
    }
}