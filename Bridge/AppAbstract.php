<?php

namespace Bridge;

abstract class AppAbstract {

    protected $bridge;

    public function __construct(BridgeInterface $bridge)
    {
        $this->bridge = $bridge;
    }

    public function methodA()
    {
        $this->bridge->methodA();
    }

    public function methodB()
    {
        $this->bridge->methodB();
    }
}