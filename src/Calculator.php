<?php

declare(strict_types=1);

namespace Coolblue\Calculator;

class Calculator
{
    public function add(float $value1, float $value2): float
    {
        return $value1 + $value2;
    }

    public function subtract(float $value1, float $value2): float
    {
        return $value1 - $value2;
    }

    public function multiply(float $value1, float $value2): float
    {
        return $value1 * $value2;
    }

    public function divide(float $value1, float $value2): float
    {
        return $value1 / $value2;
    }
}
