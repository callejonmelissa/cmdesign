<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GraphicDeGraphicDesignController extends AbstractController
{
    #[Route('/graphic/de/graphic/design', name: 'app_graphic_de_graphic_design')]
    public function index(): Response
    {
        return $this->render('graphic_de_graphic_design/index.html.twig', [
            'controller_name' => 'GraphicDeGraphicDesignController',
        ]);
    }
}
