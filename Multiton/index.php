<?php

use Multiton\Test;

require_once __DIR__ . '/../vendor/autoload.php';

$storage1 = Test::getInstance('Names');
$storage1->save('Alex');
$storage1->save('Kate');
dump($storage1->read());

$storage2 = Test::getInstance('Surnames');
$storage2->save('Smith');
$storage2->save('Brown');
dump($storage2->read());

$storage3 = Test::getInstance();
$storage3->save(28);
$storage3->save(25);
dump($storage3->read());

dump($storage1->read());
