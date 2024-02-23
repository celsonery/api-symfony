<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'Root', methods: 'GET')]
    public function index(): Response
    {
        // return $this->render('base.html.twig');

        return new JsonResponse(['data' => 'Api funcionando'], 200);
    }
}
