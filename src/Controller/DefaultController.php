<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Tests\DependencyInjection\ResettableServicePassTest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('Hola mundo con symfony!asdfasdf');
    }

    /**
     * @Route("/about")
     */
    public function about(){
        return new Response('About page');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function news($slug){

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