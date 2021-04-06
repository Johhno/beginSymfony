<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /** @Route(
     * "/hello/{prenom?World}",
     * name ="hello")
     */
    public function hello($prenom, LoggerInterface $logger, Calculator $calculator)
    {
        $logger->info('Mon message de log 1');

        $tva = $calculator->calcul(100);

        dd($tva);
        return new Response("Hello $prenom");
    }
}
