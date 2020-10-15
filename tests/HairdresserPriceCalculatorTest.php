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
        $hairdresser = HairdresserPriceCalculator::normalPerson(1);

        self::assertEquals(5, $hairdresser->calculate());
    }

    /** @test */
    public function itShouldCalcualteThePriceForRafa(): void
    {
        $hairdresser = HairdresserPriceCalculator::rafa(2);

        self::assertEquals(273650, $hairdresser->calculate());
    }

    /** @test */
    public function itShouldHaveNoDiscountCalculatingTheStandardPriceForRafaPayingInMetalic(): void
    {
        $hairdresser = HairdresserPriceCalculator::rafa(3);

        self::assertEquals(273650, $hairdresser->calculate());
    }

    /** @test */
    public function itShouldCalculateTheRafaPriceWithNoMetalicMethod(): void
    {
        $hairdresser = HairdresserPriceCalculator::rafa(1);

        self::assertEquals(273650, $hairdresser->calculate());
    }

    /** @test */
    public function itYesIt(): void
    {
        $hairdresser = HairdresserPriceCalculator::normalPerson(3);

        self::assertEquals(4.85, $hairdresser->calculate());
    }
}
