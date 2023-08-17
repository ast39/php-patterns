<?php

namespace Decorator;

/**
 * Компонент
 */
class Component extends ComponentAbstract {

    /**
     * @return void
     */
    public function operation(): void
    {
        dump('Component function');
    }
}