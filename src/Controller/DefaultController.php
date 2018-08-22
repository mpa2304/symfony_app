<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
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
        return new Response(sprintf(
            'News page for: %s',
            $slug));
    }
}