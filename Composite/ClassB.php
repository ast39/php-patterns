<?php

namespace Composite;

/**
 * Класс В
 */
class ClassB implements \Composite\CompositeInterface {

    /**
     * @return void
     */
    public function run(): void
    {
        dump('Class В - run');
    }
}