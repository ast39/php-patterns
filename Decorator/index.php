<?php

use Decorator\Component;
use Decorator\Decorator;

require_once __DIR__ . '/../vendor/autoload.php';

$decoratedComponent = new Decorator(new Component());

$decoratedComponent->operation();