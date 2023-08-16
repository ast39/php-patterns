<?php

namespace AbstractFactory;

/**
 * Класс Б
 */
class ClassB {

    /**
     * Константа версии
     */
    const VERSION = 'Class B';

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