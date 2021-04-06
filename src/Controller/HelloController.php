<?php

namespace App\Controller;

use App\Taxes\Detector;
use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /** @Route(
     * "/hello/{prenom?World}",
     * name ="hello")
     */
    public function hello($prenom, LoggerInterface $logger, Calculator $calculator, Detector $detector)
    {
        $logger->info('Mon message de log 1');

        $tva = $calculator->calcul(100);

        dump($detector->detect(101));
        dump($detector->detect(10));
        dump($tva);
        return new Response("Hello $prenom");
    }
}
