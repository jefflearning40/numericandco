<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ParcourFormationController extends AbstractController
{
    #[Route('/parcour/formation', name: 'app_parcour_formation')]
    public function index(): Response
    {
        return $this->render('parcour_formation/index.html.twig', [
            'controller_name' => 'ParcourFormationController',
        ]);
    }
}
