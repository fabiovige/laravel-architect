<?php

class Bank {
    private $name;
    public $address;

    public function setTax() 
    {
        return 10;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$bankOne = new Bank();
$bankOne->setName('teste');
echo $bankOne->getName();