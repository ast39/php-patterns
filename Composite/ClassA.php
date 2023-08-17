<?php

namespace Composite;

/**
 * Класс А
 */
class ClassA implements CompositeInterface {

    /**
     * @return void
     */
    public function run(): void
    {
        dump('Class A - run');
    }
}