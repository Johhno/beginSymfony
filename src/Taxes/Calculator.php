<?php

namespace App\Taxes;

class Calculator
{
    public function calcul(float $prix): float
    {
        return $prix * 0.2;
    }
}
