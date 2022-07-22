<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DesignuxuiController extends AbstractController
{
    #[Route('/designuxui', name: 'app_designuxui')]
    public function index(): Response
    {
        return $this->render('designuxui/index.html.twig', [
            'controller_name' => 'DesignuxuiController',
        ]);
    }
}
