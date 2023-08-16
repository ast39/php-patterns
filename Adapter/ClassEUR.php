<?php

namespace Adapter;

/**
 * Класс работы в EUR
 */
class ClassEUR {

    /**
     * Курс EUR
     */
    const RATE = 104.53;

    /**
     * Курс евро
     *
     * @return float
     */
    public function rateEUR(): float
    {
        return self::RATE;
    }
}