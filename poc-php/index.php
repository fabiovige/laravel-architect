<?php

require __DIR__ . '/vendor/autoload.php';

use FV\Person;

$person = new Person();
$person->name = 'Fabio';
$person->age = 47;

echo $person->name;

$person->setCpf('16943949802');
echo $person->getCpf();
echo $person->getCpfWithMask();