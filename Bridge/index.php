<?php

use Bridge\App;
use Bridge\BridgeA;
use Bridge\BridgeB;

require_once __DIR__ . '/../vendor/autoload.php';

$a = new App(new BridgeA());
$a->run();

$b = new App(new BridgeB());
$b->run();