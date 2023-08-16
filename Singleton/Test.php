<?php

namespace Singleton;

use Singleton\Traits\SingletonTrait;

/**
 * Тестовый класс с одиночкой
 */
class Test {

    use SingletonTrait;


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
