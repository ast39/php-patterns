<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Registry\Registry;


$test_1 = Registry::getInstance();
$test_1->set('name', 'Boris');
dump($test_1->get('name'));

$test_1->set('age', 28);
dump($test_1->get('age'));

dump($test_1->getAll());


echo '<hr>';

$test_2 = Registry::getInstance('test_data');

dump($test_2->getAll());

$test_2->set('model', 'Audi A6');
dump($test_2->getAll());
