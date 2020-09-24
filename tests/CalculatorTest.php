<?php

declare(strict_types=1);

namespace Coolblue\Tests;

use Coolblue\Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    public function setUp(): void
    {
        parent::setUp();

        $this->calculator = new Calculator();
    }

    public function testShouldAddTwoNumbers(): void
    {
        $numberOne = 1;
        $numberTwo = 2;

        $sum = 3;

        self::assertEquals($sum, $this->calculator->add($numberOne, $numberTwo));
    }

    public function testShouldDivideTwoNumbers(): void
    {
        $numberOne = 1;
        $numberTwo = 2;

        $subtraction = -1;

        self::assertEquals($subtraction, $this->calculator->subtract($numberOne, $numberTwo));
    }

    public function testShouldMultiplyTwoNumbers(): void
    {
        $numberOne = 2;
        $numberTwo = 2;

        $multiplication = 4;

        self::assertEquals($multiplication, $this->calculator->multiply($numberOne, $numberTwo));
    }

    public function testShouldSubtractTwoNumbers(): void
    {
        $numberOne = 1;
        $numberTwo = 2;

        $subtraction = 0.5;

        self::assertEquals($subtraction, $this->calculator->divide($numberOne, $numberTwo));
    }
}
