<?php

namespace Adapter;

/**
 * Интерфейс
 */
interface AdapterInterface {

    /**
     * Курс валюты
     *
     * @return float
     */
    public function rate(): float;
}