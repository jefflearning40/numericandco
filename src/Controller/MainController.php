<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class MainController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('accueil/index.html.twig');
    }

    #[Route('/connexion', name: 'app_connexion')]
    public function connexion(AuthenticationUtils $authenticationUtils): Response
    {
        // Récupérer une éventuelle erreur de login
        $error = $authenticationUtils->getLastAuthenticationError();

        // Dernier email saisi
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact/index.html.twig');
    }

    #[Route('/fablab', name: 'app_fablab')]
    public function fablab(): Response
    {
        return $this->render('fablab/index.html.twig');
    }

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/parcour/formation', name: 'app_parcour_formation')]
    public function parcourFormation(): Response
    {
        return $this->render('parcour_formation/index.html.twig');
    }

    #[Route('/public', name: 'app_public')]
    public function public(): Response
    {
        return $this->render('public/index.html.twig');
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('services/index.html.twig');
    }

    #[Route('/wiki', name: 'app_wiki')]
    public function wiki(): Response
    {
        return $this->render('wiki/index.html.twig');
    }
}
