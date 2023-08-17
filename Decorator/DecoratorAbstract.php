<?php

namespace Decorator;

/**
 * Абстракция
 */
abstract class DecoratorAbstract {

    /**
     * @var
     */
    protected $component;

    /**
     * accept Component
     */
    public function __construct($component)
    {
        $this->component = $component;
    }
}