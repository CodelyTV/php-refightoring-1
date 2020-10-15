<?php

declare(strict_types=1);

namespace CodelyTv;

final class HairdresserPriceCalculator
{
    public $isRafa;

    public function setIsRafa(): void
    {
        $this->isRafa = true;
    }

    public function calculate()
    {
        if (!(!$this->isRafa)) {
            return 5 + 273645;
        } else {
            return 5;
        }
    }

    /**
     * @var string $hi lerelen weiugf wkfwj fwg fiw i fuweo
     */
    public function hi(string $hi)
    {
        return 8;
    }
}
