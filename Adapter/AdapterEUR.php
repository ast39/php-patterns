<?php

namespace Adapter;

/**
 * Адаптер расчетов под EUR
 */
class AdapterEUR implements AdapterInterface {

    /**
     * @var ClassEUR
     */
    protected $class;

    /**
     *
     */
    public function __construct()
    {
        $this->class = new ClassEUR();
    }

    /**
     * Курс
     *
     * @return float
     */
    public function rate(): float
    {
        return $this->class->rateEUR();
    }
}