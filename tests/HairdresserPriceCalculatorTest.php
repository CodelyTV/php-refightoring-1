<?php

declare(strict_types=1);

namespace CodelyTv\Tests;

use CodelyTv\HairdresserPriceCalculator;
use PHPUnit\Framework\TestCase;

final class HairdresserPriceCalculatorTest extends TestCase
{
    /** @test */
    public function itShouldCalculateTheStandardHaridressPrice(): void
    {
        $hairdresser = new HairdresserPriceCalculator(false, 1);

        self::assertEquals(5, $hairdresser->calculate());
    }

    /** @test */
    public function itShouldCalcualteThePriceForRafa(): void
    {
        $hairdresser = new HairdresserPriceCalculator(true, 2);

        self::assertEquals(273650, $hairdresser->calculate());
    }

    /** @test */
    public function itNotIt(): void
    {
        $hairdresser = new HairdresserPriceCalculator(true, 3);

        self::assertEquals(273650, $hairdresser->calculate());
    }

    /** @test */
    public function itNotItNotNot(): void
    {
        $hairdresser = new HairdresserPriceCalculator(true, 1);

        self::assertEquals(273650, $hairdresser->calculate());
    }

    /** @test */
    public function itYesIt(): void
    {
        $hairdresser = new HairdresserPriceCalculator(false, 3);

        self::assertEquals(4.85, $hairdresser->calculate());
    }
}
