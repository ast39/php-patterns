<?php

require_once __DIR__ . '/../vendor/autoload.php';

use AbstractFactory\FactoryA;
use AbstractFactory\FactoryB;

$a = new FactoryA();
$a->showVersion();

$b = new FactoryB();
$b->showVersion();