<?php

namespace Adapter;

/**
 * Адаптер расчетов под USD
 */
class AdapterUSD implements AdapterInterface {

    /**
     * @var ClassUSD
     */
    protected $class;

    /**
     *
     */
    public function __construct()
    {
        $this->class = new ClassUSD();
    }

    /**
     * Курс
     *
     * @return float
     */
    public function rate(): float
    {
        return $this->class->rateUSD();
    }
}