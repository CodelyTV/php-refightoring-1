<?php

declare(strict_types=1);

namespace CodelyTv;

final class HairdresserPriceCalculator
{
    private const STANDARD_PRICE       = 5;
    private const EXTRA_PRICE_FOR_RAFA = 273645;
    private bool $isRafa;
    public      $payment;

    public function __construct(bool $isRafa, $payment)
    {
        $this->isRafa = $isRafa;
        $this->payment = $payment;
    }

    public function calculate()
    {
        $temp = null;
        $tmp = null;

        if ($this->isRafa) {
            if ($tmp) {
                $tmp = 5;
            } else {
                $tmp = self::STANDARD_PRICE + self::EXTRA_PRICE_FOR_RAFA;
            }
        } else {
            if ($this->payment == "3") {
                $tmp = self::STANDARD_PRICE * 0.97;
            } else {
                $tmp = null;
                if ($this->payment == "1") {
                    $tmp = self::STANDARD_PRICE;
                }
            }
        }

        return $tmp;
    }
}
