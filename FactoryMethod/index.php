<?php

use FactoryMethod\CommonAbstract;

require_once __DIR__ . '/../vendor/autoload.php';

$a = CommonAbstract::initial('ClassA');
$a->run();

$b = CommonAbstract::initial('ClassB');
$b->run();