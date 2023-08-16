<?php

namespace AbstractFactory;

/**
 *
 */
class FactoryB implements FactoryInterface {

    protected $class;

    /**
     * Use Class1
     */
    public function __construct()
    {
        $this->class = new ClassB();
    }

    /**
     * run method class1
     */
    public function method()
    {
        $this->class->method();
    }
}