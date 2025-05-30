<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class ApiService
{
    private SerializerInterface $serializer;
    private TeamService $teamService;
    private SponsorsService $sponsorService;
    private SubTeamService $subTeamService;
    private TeamMemberService $teamMemberService;
    private VehicleService $vehicleService;

    public function __construct(
        SerializerInterface $serializer,
        TeamService         $teamService,
        SponsorsService     $sponsorService,
        SubTeamService      $subTeamService,
        TeamMemberService   $teamMemberService,
        VehicleService      $vehicleService
    )
    {
        $this->serializer = $serializer;
        $this->teamService = $teamService;
        $this->sponsorService = $sponsorService;
        $this->subTeamService = $subTeamService;
        $this->teamMemberService = $teamMemberService;
        $this->vehicleService = $vehicleService;
    }

    /**
     * Team-Endpunkte
     */
    public function getAllTeams(): JsonResponse
    {
        $teams = $this->teamService->getAll();
        $serializedTeams = [];
        $serializedTeams['columns'] = [
            ['key' => 'id', 'label' => 'ID'],
            ['key' => 'year', 'label' => 'Year'],
            ['key' => 'name', 'label' => 'Name'],
            ['key' => 'vehicle', 'label' => 'Vehicle'],
            ['key' => 'subTeams', 'label' => 'subTeams'],
            ['key' => 'subTeams', 'label' => 'Sponsors'],
        ];

        foreach ($teams as $team) {
            $serializedTeams['data'][] = [
                'id' => $team->getId(),
                'year' => $team->getYear(),
                'name' => $team->getName(),
                'vehicle' => $team->getVehicle(),
                'subTeams' => $team->getSubTeams()->map(fn($subTeam) => $subTeam->getId())->toArray(),
                'sponsors' => $team->getSponsors()->map(fn($sponsor) => $sponsor->getId())->toArray(),
            ];
        }

        return new JsonResponse($serializedTeams);
    }

    public function getTeamById(int $id): JsonResponse
    {
        $team = $this->teamService->getById($id);

        if (!$team) {
            return new JsonResponse(['error' => 'Team not found'], 404);
        }

        return new JsonResponse($team);
    }

    public function getTeamDetailsById(int $id): JsonResponse
    {
        $teamDetails = $this->teamService->getTeamDetailsById($id);

        if (!$teamDetails) {
            return new JsonResponse(['error' => 'Team not found'], 404);
        }

        return new JsonResponse($teamDetails);
    }

    public function createTeam(array $data): JsonResponse
    {
        $team = $this->teamService->create($data);
        return new JsonResponse($team, 201);
    }

    public function updateTeam(int $id, array $data): JsonResponse
    {
        $team = $this->teamService->update($id, $data);

        if (!$team) {
            return new JsonResponse(['error' => 'Team not found'], 404);
        }

        return new JsonResponse($team);
    }

    public function deleteTeam(int $id): JsonResponse
    {
        $success = $this->teamService->delete($id);

        if (!$success) {
            return new JsonResponse(['error' => 'Team not found'], 404);
        }

        return new JsonResponse(null, 204);
    }

    /**
     * Sponsor-Endpunkte
     */
    public function getAllSponsors(): JsonResponse
    {
        $sponsors = $this->sponsorService->getAll();
        return new JsonResponse($sponsors);
    }

    public function getSponsorById(int $id): JsonResponse
    {
        $sponsor = $this->sponsorService->getById($id);

        if (!$sponsor) {
            return new JsonResponse(['error' => 'Sponsor not found'], 404);
        }

        return new JsonResponse($sponsor);
    }

    public function createSponsor(array $data): JsonResponse
    {
        $sponsor = $this->sponsorService->create($data);
        return new JsonResponse($sponsor, 201);
    }

    public function updateSponsor(int $id, array $data): JsonResponse
    {
        $sponsor = $this->sponsorService->update($id, $data);

        if (!$sponsor) {
            return new JsonResponse(['error' => 'Sponsor not found'], 404);
        }

        return new JsonResponse($sponsor);
    }

    public function deleteSponsor(int $id): JsonResponse
    {
        $success = $this->sponsorService->delete($id);

        if (!$success) {
            return new JsonResponse(['error' => 'Sponsor not found'], 404);
        }

        return new JsonResponse(null, 204);
    }
}