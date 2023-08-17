<?php

namespace Decorator;

/**
 * Сам декоратор
 */
class Decorator extends DecoratorAbstract {

    /**
     * @return void
     */
    public function operation(): void
    {
        dump('Decorator function start');

        $this->component->operation();

        dump('Decorator function end');
    }
}