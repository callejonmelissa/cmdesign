<?php

namespace App\Controller;

use App\Entity\Portfolio;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PortfolioController extends AbstractController
{
    #[Route('/portfolio/{slug}', name: 'portfolio_show')]
    public function show(Portfolio $portfolio): Response
    {
        return $this->render('portfolio/show.html.twig', [
            'controller_name' => 'PortfolioController',
            'portfolio'=>$portfolio,
        ]);
    }
}