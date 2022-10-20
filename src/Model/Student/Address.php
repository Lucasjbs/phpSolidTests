<?php

namespace Lucas\Projeto\Model\Student;

class Address
{
    private string $street;
    private string $city;
    private string $state;
    private string $country;

    public function __construct(string $street, string $city, string $state, string $country) {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }
    
    public function getStreetName(): string
    {
        return $this->street;
    }
    
    public function getCityName(): string
    {
        return $this->city;
    }
    
    public function getStateName(): string
    {
        return $this->state;
    }
    
    public function getCountryName(): string
    {
        return $this->country;
    }
}