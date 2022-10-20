<?php

namespace Lucas\Projeto\Model\Student;

use DateTimeInterface;
use Lucas\Projeto\Model\Video\Video;
use Lucas\Projeto\Service\ExpPointsManager;

class Student
{
    private FullName $fullName;
    private Email $email;
    private DateTimeInterface $birthDate;
    private Address $address;
    private Video|array $watchedVideos;
    private ExpPointsManager $experiencePoints;
    
    public function __construct(FullName $fullName, Email $email, DateTimeInterface $birthDate, Address $address, Video|array $watchedVideos) {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->birthDate = $birthDate;
        $this->address = $address;
        $this->watchedVideos = $watchedVideos;
        $this->experiencePoints = New ExpPointsManager;
    }

    public function getFullName(): string
    {
        return $this->fullName->getFullName();
    }

    public function getEmailAsString(): string
    {
        return $this->email->getEmailAsString();
    }

    public function getBirthDate(): DateTimeInterface
    {
        return $this->birthDate;
    }

    public function getAddress(): string
    {
        $x=1;
        return "{$this->address->getStreetName()}, {$this->address->getCityName()}. {$this->address->getStateName()}, {$this->address->getCountryName()}.";
    }

    public function getWatchedVideos(): Video|array
    {
        return $this->watchedVideos;
    }

    public function getExp(): ExpPointsManager
    {
        return $this->experiencePoints;
    }
}