<?php

namespace FactoryMethod;

/**
 * Абстракция
 */
abstract class CommonAbstract
{
    /**
     * @param string $class
     * @return mixed
     */
    public static function initial(string $class)
    {
        return new $class();
    }

    /**
     * @return void
     */
    abstract public function run(): void;
}