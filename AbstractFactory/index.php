<?php

use AbstractFactory\FactoryA;
use AbstractFactory\FactoryB;

$a = new FactoryA();
$a->method();

/**
 * create FactoryB
 */
$b = new FactoryB();
$b->method();