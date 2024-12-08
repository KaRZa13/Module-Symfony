<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Controller1Controller extends AbstractController
{
    #[Route('/controller1', name: 'app_controller1')]
    public function index(): Response
    {
        return $this->render('controller1/index.html.twig', [
            'controller_name' => 'Controller1Controller',
        ]);
    }
}
