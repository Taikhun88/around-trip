<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {
    public function index() {
        $response = new Response('<h1>Hello World</h1>
        ');
        return $response;
    }

    #[
        Route(
            path:'/blog',
            name: 'blog',
            methods: ["GET"],
            schemes:["HTTPS"]
        )
    ]
    public function blog() {
        return new Response('Blog');
    }
}