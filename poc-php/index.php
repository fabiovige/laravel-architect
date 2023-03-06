<?php

interface Money {
    public function getMoney();
}

class Bank implements Money 
{
    public function getMoney()
    {
        echo 'teste 1';
    }
}

class Broker implements Money 
{
    public function getMoney()
    {
        echo 'teste 2';
    }
}

class OperationService
{
    public function retrieveInvestments(Money $institution)
    {
        return $institution->getMoney();
    }
}

$service = new OperationService;
echo $service->retrieveInvestments(new Bank);
