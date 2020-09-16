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
        // hint: use self::assertEquals
    }

    public function testShouldDivideTwoNumbers(): void
    {
        // hint: use self::assertEquals
    }

    public function testShouldMultiplyTwoNumbers(): void
    {
        // hint: use self::assertEquals
    }

    public function testShouldSubtractTwoNumbers(): void
    {
        // hint: use self::assertEquals
    }
}
