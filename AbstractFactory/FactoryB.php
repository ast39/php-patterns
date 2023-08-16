<?php

namespace AbstractFactory;

/**
 * Фабрика классов типа Б
 */
class FactoryB implements FactoryInterface {

    /**
     * @var ClassB
     */
    protected $class;

    /**
     *
     */
    public function __construct()
    {
        $this->class = new ClassB();
    }

    /**
     * @return void
     */
    public function showVersion(): void
    {
        $this->class->showVersion();
    }
}