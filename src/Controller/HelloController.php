<?php

namespace App\Controller;


use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /** @Route(
     * "/hello/{prenom?World}",
     * name ="hello")
     */
    public function hello($prenom, Environment $twig)
    {
        $html = $twig->render('hello.html.twig', [
            'prenom' => $prenom,
            'age' => 18,
            'prenoms' => ['Mélodie','Titi'
            ]
        ]);
        return new Response($html);
    }
}
