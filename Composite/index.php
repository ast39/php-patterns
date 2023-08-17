<?php

use Builder\Director;
use Builder\BuilderA;
use Builder\BuilderB;
use Composite\ClassA;
use Composite\ClassB;
use Composite\Composite;

require_once __DIR__ . '/../vendor/autoload.php';

$a = new Composite();

$a->addClass(new ClassA());
$a->addClass(new ClassB());

$a->run();