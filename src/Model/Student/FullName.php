<?php

namespace Lucas\Projeto\Model\Student;

class FullName
{
    private string $firstName;
    private string $lastName;
    
    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName(): string
    {
        return ($this->firstName . " " . $this->lastName);
    }
}