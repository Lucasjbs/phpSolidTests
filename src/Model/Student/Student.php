<?php

namespace Lucas\Projeto\Model\Student;

use DateTimeInterface;

class Student
{
    private FullName $fullName;
    private Email $email;
    private DateTimeInterface $birthDate;
    private Address $address;
    private WatchedVideos $watchedVideos;
    
    public function __construct(FullName $fullName) {
        $this->fullName = $fullName;
    }

    public function getFullName(): string
    {
        return $this->fullName->getFullName();
    }
}