<?php

declare(strict_types=1);

namespace CodelyTv;

final class HairdresserPriceCalculator
{
    private const STANDARD_PRICE       = 5;
    private const EXTRA_PRICE_FOR_RAFA = 273645;
    private bool $isRafa;

    public function __construct(bool $isRafa)
    {
        $this->isRafa = $isRafa;
    }

    public function calculate(): int
    {
        if ($this->isRafa) {
            return self::STANDARD_PRICE + self::EXTRA_PRICE_FOR_RAFA;
        }

        return self::STANDARD_PRICE;
    }
}
