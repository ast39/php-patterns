<?php

namespace FactoryMethod;

/**
 * Class A
 */
class ClassA extends CommonAbstract {

    /**
     * @return void
     */
    public function run(): void
    {
        dump('Class A - Run');
    }
}