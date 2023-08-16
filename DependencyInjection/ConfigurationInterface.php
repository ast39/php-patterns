<?php

namespace DependencyInjection;

/**
 * Интерфейс конфигураций
 */
interface ConfigurationInterface {

    /**
     * Получить марку авто
     *
     * @return string
     */
    public function getCar(): string;

    /**
     * Получить цвет авто
     *
     * @return string
     */
    public function getColor(): string;
}