<?php declare(strict_types=1);

namespace App\Controller;

use App\Services\ApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    private ApiService $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    // Team Routes
    #[Route('/teams', name: 'get_teams', methods: ['GET'])]
    public function getTeams(): JsonResponse
    {
        return $this->apiService->getAllTeams();
    }

    #[Route('/teams/{id}', name: 'get_team', methods: ['GET'])]
    public function getTeam(int $id): JsonResponse
    {
        return $this->apiService->getTeamById($id);
    }

    #[Route('/teams/{id}/details', name: 'get_team_details', methods: ['GET'])]
    public function getTeamDetails(int $id): JsonResponse
    {
        return $this->apiService->getTeamDetailsById($id);
    }

    #[Route('/teams', name: 'create_team', methods: ['POST'])]
    public function createTeam(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        return $this->apiService->createTeam($data);
    }

    #[Route('/teams/{id}', name: 'update_team', methods: ['PUT'])]
    public function updateTeam(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        return $this->apiService->updateTeam($id, $data);
    }

    #[Route('/teams/{id}', name: 'delete_team', methods: ['DELETE'])]
    public function deleteTeam(int $id): JsonResponse
    {
        return $this->apiService->deleteTeam($id);
    }

    // Sponsor Routes
    #[Route('/sponsors', name: 'get_sponsors', methods: ['GET'])]
    public function getSponsors(): JsonResponse
    {
        return $this->apiService->getAllSponsors();
    }

    #[Route('/sponsors/{id}', name: 'get_sponsor', methods: ['GET'])]
    public function getSponsor(int $id): JsonResponse
    {
        return $this->apiService->getSponsorById($id);
    }

    #[Route('/sponsors', name: 'create_sponsor', methods: ['POST'])]
    public function createSponsor(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        return $this->apiService->createSponsor($data);
    }

    #[Route('/sponsors/{id}', name: 'update_sponsor', methods: ['PUT'])]
    public function updateSponsor(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        return $this->apiService->updateSponsor($id, $data);
    }

    #[Route('/sponsors/{id}', name: 'delete_sponsor', methods: ['DELETE'])]
    public function deleteSponsor(int $id): JsonResponse
    {
        return $this->apiService->deleteSponsor($id);
    }
}