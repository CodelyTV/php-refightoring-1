<?php

declare(strict_types=1);

namespace CodelyTv;

final class HairdresserPriceCalculator
{
    private bool $isRafa;

    public function __construct(bool $isRafa)
    {
        $this->isRafa = $isRafa;
    }

    public function calculate()
    {
        if (!(!$this->isRafa)) {
            return 5 + 273645;
        } else {
            return 5;
        }
    }
}
