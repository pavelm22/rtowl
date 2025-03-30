<?php

namespace App\Services;

use App\Entity\Interface\TeamMemberInterface;
use App\Entity\TeamMember;
use App\Repository\SubTeamRepository;
use App\Repository\TeamMemberRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class TeamMemberService extends AbstractCrudService
{
    private TeamMemberRepository $teamMemberRepository;
    private SubTeamRepository $subTeamRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        TeamMemberRepository $teamMemberRepository,
        SubTeamRepository $subTeamRepository
    ) {
        parent::__construct($entityManager, $serializer);
        $this->teamMemberRepository = $teamMemberRepository;
        $this->subTeamRepository = $subTeamRepository;
    }

    protected function getRepository(): TeamMemberRepository
    {
        return $this->teamMemberRepository;
    }

    protected function createEntityInstance(): TeamMemberInterface
    {
        return new TeamMember();
    }

    protected function updateEntityFields($entity, array $data)
    {
        if (isset($data['name'])) {
            $entity->setName($data['name']);
        }

        if (isset($data['email'])) {
            $entity->setEmail($data['email']);
        }

        if (isset($data['imgPath'])) {
            $entity->setImgPath($data['imgPath']);
        }

        if (isset($data['position'])) {
            $entity->setPosition($data['position']);
        }

        if (isset($data['subTeamId'])) {
            $subTeam = $this->subTeamRepository->find($data['subTeamId']);
            if ($subTeam) {
                $entity->setSubTeam($subTeam);
            }
        }

        return $entity;
    }
}