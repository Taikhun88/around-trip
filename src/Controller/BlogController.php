<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends AbstractController
{
    #[Route('/', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('base.html.twig');

        // return $this->json([
        //     'message' => 'Test'
        // ]);

        // return $this->file('./images/space.jpg');        

        // RenderView method Returns the html content with all html structure
        // $viewContent = $this->renderView('base.html.twig');

        // if (true) {
        //     return $this->redirectToRoute('app_blog', ['tile' => 'test query param url']);
        // }

        // $url = $this->generateUrl('app_blog', ['title' => 'test generateur url'], UrlGeneratorInterface::ABSOLUTE_URL);
        // dd($url);

        // throw $this->createNotFoundException('Cette page n\'existe pas');
        
        // This below works with services.yaml parameters. 
        // $emailProvider = $this->getParameter('app.email_provider');
        // dd($emailProvider);
    }
}
