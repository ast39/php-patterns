<?php

namespace Composite;

/**
 * Сам композит
 */
class Composite implements CompositeInterface {

    /**
     * @var
     */
    private $classes;

    /**
     * @param CompositeInterface $class
     * @return void
     */
    public function addClass(CompositeInterface $class): void
    {
        $this->classes[] = $class;
    }

    /**
     * @return void
     */
    public function run(): void
    {
        foreach ($this->classes as $class) {
            $class->run();
        }
    }
}