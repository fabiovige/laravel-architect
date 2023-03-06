<?php

namespace FV;

use Tongedev\RfbDocument\CPFDocument;

class Person
{
    public string $name;
    public string $age;

    private string $cpf;

    public function setCpf(string $document)
    {
        $cpfClass = new CPFDocument(); 
        $this->cpf = $cpfClass->sanitize($document);
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getCpfWithMask()
    {
        $cpfClass = new CPFDocument(); 
        return $cpfClass->format($this->cpf);
    }
}