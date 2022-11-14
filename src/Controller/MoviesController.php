<?php

namespace App\Controller;

use App\Entity\Movies;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        //findAll - Selects All
        //find - select where ...
        //fiindBy([],['id'=>'DESC'])
        //findOneBy(['id'=>1]) takes the AND statement
        //count([]) counts num of rows
        // $repository = $this->em->getRepository(Movies::class);
        // $movies = $repository->findAll();
        // dd($movies);
        return $this->render('index.html.twig');
    }
    
}
