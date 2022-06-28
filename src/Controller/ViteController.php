<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViteController extends AbstractController
{
    #[Route('/', name: 'app_vite')]
    public function index(): Response
    {
        return $this->render('vite/index.html.twig', [
            'controller_name' => 'ViteController',
        ]);
    }
}
