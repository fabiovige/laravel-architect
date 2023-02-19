<?php

class Bank {
    public $name;
}

$bankOne = new Bank();
$bankOne->name = 'Nubank';
echo $bankOne->name;

$bankTwo = new Bank();
$bankTwo->name = 'Inter';
echo $bankTwo->name;
