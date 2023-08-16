<?php

use Adapter\AdapterUSD;
use Adapter\AdapterEUR;

require_once __DIR__ . '/../vendor/autoload.php';

$usd = new AdapterUSD();
$eur = new AdapterEUR();

dump($usd->rate());
dump($eur->rate());