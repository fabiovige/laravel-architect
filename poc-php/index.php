<?php

function savePerson(
    string $name,
    int $age,
    string $address
){
    return 'person saved';
}

$array = [
    'name' => 'Fabio',
    'age' => 47,
    'address' => 'Rua Ipiranga'
];

echo savePerson(...$array);
