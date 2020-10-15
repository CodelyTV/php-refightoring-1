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
        $hairdresser = new HairdresserPriceCalculator("Javi");

        self::assertEquals(5, $hairdresser->calculate());
    }
    /** @test */
    public function itShouldCalcualteThePriceForRafa(): void
    {
        $hairdresser = new HairdresserPriceCalculator("Javi");
        $hairdresser->setIsRafa();

        self::assertEquals(273650, $hairdresser->calculate());
    }
}
