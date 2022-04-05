<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{   
    #[Route('/')]
    public function index(): Response {

        $product = [
            'name' => 'Jabra 2 evolve 65',
            'price' => 190,
            'lastUpdate' => strtotime('yesterday')
        ];

        return $this->render('test.html.twig', [
            'product' => $product, 
            'h2' => '<h2>Ceci est un test h2</h2>'
        ]);
    }

    #[Route(path: 'about/list', name: 'about')]
    public function aboutList()
    {
        return $this->render('base.html.twig');
    }
}