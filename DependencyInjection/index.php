<?php

use DependencyInjection\ConfigurationOne;
use DependencyInjection\Connection;

require_once __DIR__ . '/../vendor/autoload.php';

$car_1 = new Connection(new ConfigurationOne('Lexus', 'Black'));
$car_2 = new Connection(new ConfigurationOne('Mazda', 'Rad Soul'));

dump($car_1->run());
echo '<hr />';
dump($car_2->run());