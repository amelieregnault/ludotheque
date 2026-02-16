<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LudothequeController extends AbstractController
{
    #[Route('/', name: 'ludotheque_index')]
    public function index(): Response
    {
        return $this->render('ludotheque/index.html.twig', [
            'controller_name' => 'LudothequeController',
        ]);
    }

    #[Route('/list', name: 'ludotheque_list')]
    public function list(): Response
    {
        return $this->render('ludotheque/list.html.twig', [
            'controller_name' => 'LudothequeController',
        ]);
    }

    #[Route('/add', name: 'ludotheque_add')]
    public function add(): Response
    {
        return $this->render('ludotheque/add.html.twig', [
            'controller_name' => 'LudothequeController',
        ]);
    }
}

