<?php

declare(strict_types=1);

namespace CodelyTv;

final class HairdresserPriceCalculator
{
    private const         STANDARD_PRICE               = 5;
    private const         EXTRA_PRICE_FOR_RAFA         = 273645;
    private const         PAYMENT_METHOD_METALIC       = 3;
    const                 DISCOUNT_PER_METALIC_PAYMENT = 0.97;
    private int       $payment;
    private bool      $isRafa;

    public function __construct(bool $isRafa, int $payment)
    {
        $this->isRafa  = $isRafa;
        $this->payment = $payment;
    }

    public function calculate(): float
    {
        $totalPrice = null;

        if ($this->isRafa) {
            return self::STANDARD_PRICE + self::EXTRA_PRICE_FOR_RAFA;
        }

        if ($this->payment === self::PAYMENT_METHOD_METALIC) {
            return self::STANDARD_PRICE * self::DISCOUNT_PER_METALIC_PAYMENT;
        }

        return self::STANDARD_PRICE;
    }
}
