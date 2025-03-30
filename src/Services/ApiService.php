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
        return new JsonResponse($this->serialize($teams));
    }

    public function getTeamById(int $id): JsonResponse
    {
        $team = $this->teamService->getById($id);

        if (!$team) {
            return new JsonResponse(['error' => 'Team not found'], 404);
        }

        return new JsonResponse($this->serialize($team));
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
        return new JsonResponse($this->serialize($team), 201);
    }

    public function updateTeam(int $id, array $data): JsonResponse
    {
        $team = $this->teamService->update($id, $data);

        if (!$team) {
            return new JsonResponse(['error' => 'Team not found'], 404);
        }

        return new JsonResponse($this->serialize($team));
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
        return new JsonResponse($this->serialize($sponsors));
    }

    public function getSponsorById(int $id): JsonResponse
    {
        $sponsor = $this->sponsorService->getById($id);

        if (!$sponsor) {
            return new JsonResponse(['error' => 'Sponsor not found'], 404);
        }

        return new JsonResponse($this->serialize($sponsor));
    }

    public function createSponsor(array $data): JsonResponse
    {
        $sponsor = $this->sponsorService->create($data);
        return new JsonResponse($this->serialize($sponsor), 201);
    }

    public function updateSponsor(int $id, array $data): JsonResponse
    {
        $sponsor = $this->sponsorService->update($id, $data);

        if (!$sponsor) {
            return new JsonResponse(['error' => 'Sponsor not found'], 404);
        }

        return new JsonResponse($this->serialize($sponsor));
    }

    public function deleteSponsor(int $id): JsonResponse
    {
        $success = $this->sponsorService->delete($id);

        if (!$success) {
            return new JsonResponse(['error' => 'Sponsor not found'], 404);
        }

        return new JsonResponse(null, 204);
    }

    /**
     * Hilfsmethode zum Serialisieren von Objekten in JSON
     */
    private function serialize($data)
    {
        return json_decode($this->serializer->serialize($data, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]), true);
    }
}