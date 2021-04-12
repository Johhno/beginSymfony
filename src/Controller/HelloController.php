<?php

namespace App\Controller;


use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /* Ces 2 fonctions ont en commun : twig , render() */
    public function render(string $path, array $variables = [])
    {
        $html = $this->twig->render($path, $variables);
        return new Response($html);
    }

    /** @Route(  "/hello/{prenom?World}", name ="hello") */
    public function hello($prenom)
    {
        return $this->render('hello.html.twig', ['prenom' => $prenom]);
    }

    /** @Route( * "/example", name ="example") */
    public function example()
    {
        return $this->render('example.html.twig', ['age' => 33]);
    }
}
