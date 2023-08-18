<?php

namespace Facade;

/**
 * Сам фасад
 */
class Facade {

    /**
     * @var ClassA
     */
    protected $unit1;

    /**
     * @var ClassB
     */
    protected $unit2;

    /**
     * @var ClassC
     */
    protected $unit3;

    public function __construct()
    {
        $this->unit1 = new ClassA();
        $this->unit2 = new ClassB();
        $this->unit3 = new ClassC();
    }

    /**
     * @return void
     */
    public function start(): void
    {
        $this->unit1->run();
        $this->unit2->show();
        $this->unit3->out();
    }
}