<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LudothequeController extends AbstractController
{
    #[Route('/', name: 'app_ludotheque')]
    public function index(): Response
    {
        return $this->render('ludotheque/index.html.twig', [
            'controller_name' => 'LudothequeController',
        ]);
    }
}

