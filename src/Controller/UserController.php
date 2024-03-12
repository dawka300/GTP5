<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route(path: '/user/{id}', name: 'user', defaults: ['user' => null], methods: ['GET', 'HEAD'])]
    public function profile($id): Response
    {
        return $this->render('base.html.twig');
    }
}

