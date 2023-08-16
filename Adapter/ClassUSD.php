<?php

namespace Adapter;

/**
 * Класс работы в USD
 */
class ClassUSD {

    /**
     * Курс USD
     */
    const RATE = 95.75;

    /**
     * Курс доллара
     *
     * @return float
     */
    public function rateUSD(): float
    {
        return self::RATE;
    }
}