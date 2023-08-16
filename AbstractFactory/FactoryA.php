<?php

namespace AbstractFactory;

/**
 * Фабрика классов типа А
 */
class FactoryA implements FactoryInterface {

    /**
     * @var ClassA
     */
    protected $class;

    /**
     *
     */
    public function __construct()
    {
        $this->class = new ClassA();
    }

    /**
     * @return void
     */
    public function showVersion(): void
    {
        $this->class->showVersion();
    }
}