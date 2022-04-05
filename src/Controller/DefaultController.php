<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/blog', name: 'blog_')]
class DefaultController {
    public function index(Request $requestJson) {
        dd($requestJson);

        $response = new JsonResponse(['Salutations:
        ' => 'Hey']);

        return $response;
    }

    #[
        Route(
            path:'/homepage', 
            methods: ['GET'],
            name: 'homepage',
            priority: 1
        )
    ]
    public function blogHomePage() {
        return new Response('blog Homepage');
    }

    #[
        Route(
            path:'/{name}',
            name: 'blog',
            methods: ["GET"],
            schemes:["HTTPS"],
            host: '127.0.0.1'
            // requirements: [
            //     'id' => '\d+'
            // ]
            // defaults: [
            //     'name' => 'dupont'
            // ]

            // defaults: [
                // 'id' => ''
                // ]
        
        )
    ]
    public function blog(Request $request) {

        $title = $request->attributes->get('id');

        dd($title);

        // old school way
        // $allRouteParams = $request->attributes->all();
        // $allParam = $request->attributes->get('_route_params');
        return new Response('Blog');
    }
}