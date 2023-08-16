<?php

namespace AbstractFactory;

/**
 *
 */
class FactoryA implements FactoryInterface {

    protected $class;

    /**
     * Use Class1
     */
    public function __construct()
    {
        $this->class = new ClassA();
    }

    /**
     * run method class1
     */
    public function method()
    {
        $this->class->method();
    }
}