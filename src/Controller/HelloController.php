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
            'formateur1'=>['prenom'=>'John','nom' => 'Tchen'],
            'formateur2'=>['prenom'=>'Melodie','nom' => 'Huynh'],
            'formateur3'=>['prenom'=>'Remy','nom' => 'Marquis']
        ]);
        return new Response($html);
    }
}
