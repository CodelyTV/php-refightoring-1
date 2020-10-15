<?php

declare(strict_types=1);

namespace CodelyTv;

final class HairdresserPriceCalculator
{
    private const STANDARD_PRICE       = 5;
    private const EXTRA_PRICE_FOR_RAFA = 273645;
    const         PAYMENT_METHOD_METALIC                    = 3;
    public       $payment;
    private bool $isRafa;

    public function __construct(bool $isRafa, $payment)
    {
        $this->isRafa  = $isRafa;
        $this->payment = $payment;
    }

    public function calculate()
    {
        $temp       = null;
        $totalPrice = null;

        if ($this->isRafa) {
            $totalPrice = self::STANDARD_PRICE + self::EXTRA_PRICE_FOR_RAFA;
        } else if ($this->payment === self::PAYMENT_METHOD_METALIC) {
            $totalPrice = self::STANDARD_PRICE * 0.97;
        } else {
            $totalPrice = null;
            if ($this->payment === 1) {
                $totalPrice = self::STANDARD_PRICE;
            }
        }

        return $totalPrice;
    }
}
