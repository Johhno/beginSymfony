<?php

namespace App\Controller;


// use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /** @Route(
     * "/hello/{prenom?World}",
     * name ="hello")
     */
    public function hello($prenom)
    {
        $this->logger->error('Mon meessage de log');
        return new Response("Hello $prenom");
    }
}
