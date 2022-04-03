<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController {
    public function index(Request $request) {

        // dd($request);

        // $response = new Response(json_encode(['Salutations' => 'Comment vas tu?']), 200, ['Content-type' => 'application/json']);
        $JsonResponse = new JsonResponse(['SalutJason' => 'Who are you gonna kill tonight?']);
        // return $response;
        return $JsonResponse;
    }
}