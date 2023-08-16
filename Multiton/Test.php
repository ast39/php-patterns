<?php

namespace Multiton;

use Multiton\Traits\MultitonTrait;

/**
 * Тестовый класс
 */
class Test {

    use MultitonTrait;

    /**
     * @var array
     */
    private $var = [];

    /**
     * @param mixed $v
     * @return void
     */
    public function save(mixed $v): void
    {
        $this->var[] = $v;
    }

    /**
     * @return array
     */
    public function read(): array
    {
        return $this->var;
    }
}
