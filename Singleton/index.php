<?php

use Singleton\Test;

require_once __DIR__ . '/../vendor/autoload.php';

$storage1 = Test::getInstance();

$storage1->save('Alex');
$storage1->save('Kate');
dump($storage1->read());

$storage2 = Test::getInstance();
dump($storage2->read());

$storage1->save('Chris');
dump($storage1->read());

dump($storage2->read());
