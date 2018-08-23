<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Tests\DependencyInjection\ResettableServicePassTest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function homepage(){
        return $this->render('news/homepage.html.twig');
    }

    /**
     * About route page
     * @Route("/about")
     * @return Response
     */
    public function about(){
        return new Response('About page');
    }

    /**
     * News page
     * @param string $slug the new string that represents the slug
     * @Route("/news/{slug}", name="news_show")
     * @return mixed
     */
    public function news($slug, LoggerInterface $logger){

        $logger->info('slug is: '. $slug);

        $comments = [
            'Comentario 1 bla bla bla',
            'Comentario 2 bla bla bla',
            'Comentario 3 bla bla bla',
            'Comentario 4 bla bla bla',
            'Comentario 5 bla bla bla',
        ];

        return $this->render('news/show.html.twig', [
            'title' => ucwords(str_replace('-', '', $slug)),
            'comments' => $comments
        ]);
    }
}