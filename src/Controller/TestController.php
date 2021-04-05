<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{

    public function index()
    {
        dd('Ca fonctionne');
    }

    public function afficheAge(Request $request, $age)
    {
        switch ($age) {
            case ($age = 0):
                return new Response("Vous avez $age an");
            case ($age >= 0):
                return new Response("Vous avez $age ans");
        }
    }
}
