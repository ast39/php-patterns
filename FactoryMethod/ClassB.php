<?php

namespace FactoryMethod;

/**
 * Class B
 */
class ClassB extends CommonAbstract {

    /**
     * @return void
     */
    public function run(): void
    {
        dump('Class B - Run');
    }
}