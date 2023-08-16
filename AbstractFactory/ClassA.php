<?php

namespace AbstractFactory;

/**
 * Класс А
 */
class ClassA {

    /**
     * Константа версии
     */
    const VERSION = 'Class A';

    /**
     * Реализация метода в классах типа Б
     *
     * @return void
     */
    public function showVersion(): void
    {
        dump('Version for ' . self::VERSION);
    }
}