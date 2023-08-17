<?php

use Builder\Director;
use Builder\BuilderA;
use Builder\BuilderB;

require_once __DIR__ . '/../vendor/autoload.php';

$director = new Director();

$builderA = new BuilderA();
$builderB = new BuilderB();

$director->build($builderA);
$product1 = $builderA->getResult();
$product1->getProduct();

$director->build($builderB);
$product2 = $builderB->getResult();
$product2->getProduct();