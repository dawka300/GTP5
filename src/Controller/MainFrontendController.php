<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainFrontendController extends AbstractController
{
    #[Route(path: '/', name: 'home', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route(path: '/contact', name: 'contact', methods: ['GET'])]
    public function contact(): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route(path: '/about', name: 'contact', methods: ['GET'])]
    public function about(): Response
    {
        return $this->render('base.html.twig');
    }
}
