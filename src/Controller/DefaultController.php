<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
    public function index(Request $requestJson) {
        dd($requestJson);
        $response = new JsonResponse(['Salutations:
        ' => 'Hey']);
        return $response;
    }

    #[
        Route(
            path:'/blog/{name?meow}',
            name: 'blog',
            methods: ["GET"],
            schemes:["HTTPS"],
            // defaults: [
            //     'name' => 'dupont'
            // ]
        )
    ]
    public function blog(Request $request) {

        $title = $request->attributes->get('name');

        dd($title);

        // old school way
        // $allRouteParams = $request->attributes->all();
        // $allParam = $request->attributes->get('_route_params');
        return new Response('Blog');
    }
}