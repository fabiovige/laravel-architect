<?php

class Bank
{
    private $name;
    protected $address;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class NationalBank extends Bank {

}

$nationalBank = new NationalBank();
$nationalBank->setName('XPTO');
echo $nationalBank->getName();