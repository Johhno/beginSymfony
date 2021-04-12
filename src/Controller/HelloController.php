<?php

namespace App\Controller;


use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{

    /* Ces 2 fonctions ont en commun : twig , render(). */
    /** @Route(  "/hello/{prenom?World}", name ="hello") */
    public function hello($prenom, Environment $twig)
    {
        $html = $twig->render('hello.html.twig', [
            'prenom' => $prenom
        ]);
        return new Response($html);
    }

    /** @Route( * "/example", name ="example") */
    public function example(Environment $twig)
    {
        $html = $twig->render('example.html.twig', [
            'age' => 33
        ]);
        return new Response($html);
    }
}
