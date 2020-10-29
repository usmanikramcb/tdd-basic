<?php

declare(strict_types=1);

namespace Coolblue\Tests;

use Coolblue\Calculator\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private const VALUE_ONE = 2;
    private const VALUE_TWO = 4;

    private Calculator $calculator;

    public function setUp(): void
    {
        parent::setUp();

        $this->calculator = new Calculator();
    }

    public function testShouldReturnTwoAddedNumbersOnAdd(): void
    {
        // hint: use self::assertEquals
    }

    public function testShouldReturnTwoSubtractedNumbersOnSubtraction(): void
    {
        // hint: use self::assertEquals
    }

    public function testShouldReturnDividedNumbersOnDivision(): void
    {
        // hint: use self::assertEquals
    }

    public function testShouldThrowErrorWhenDividingByZeroOnDivision(): void
    {
        // hint: use $this->expectException
    }

    public function testShouldReturnMultipliedNumbersOnMultiply(): void
    {
        // hint: use self::assertEquals
    }
}
