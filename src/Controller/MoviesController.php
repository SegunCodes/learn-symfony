<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movies = ["Black Panther 2", "Avengers: Eng Game", "Spider Man: No way home"];
        return $this->render('index.html.twig', [
            'movies' => $movies
        ]);
    }
    
}
