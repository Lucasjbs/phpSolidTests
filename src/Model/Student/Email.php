<?php

namespace Lucas\Projeto\Model\Student;

class Email
{
    private string $email;

    public function __construct(string $email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->email = $email;
        }
    }
    
    public function getEmailAsString(): string
    {
        return $this->email;
    }
}