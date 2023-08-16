<?php

namespace AbstractFactory;

/**
 * Интерфейс для фабрик
 */
interface FactoryInterface {

    /**
     * Метод вывода версии
     *
     * @return void
     */
    public function showVersion(): void;
}
