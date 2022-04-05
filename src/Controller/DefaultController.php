<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController 
{
    public function index() {
        $response = new JsonResponse(['<h1>Hello World</h1>
        ']);

        return $response;
    }
}