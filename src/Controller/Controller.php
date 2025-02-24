<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Controller extends AbstractController
{
    #[Route('/{spaRouting}', name: 'app_', requirements: ['spaRouting' => '.*'], methods: ['GET'], priority: -1)]
    public function index(): Response
    {
        return $this->render('/base.html.twig',);
    }
}
