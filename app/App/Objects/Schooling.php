<?php

class Scooling
{

    private string $school;
    private string $city;

    public function __construct(string $school, string $city)
    {
        $this->school = $school;
        $this->city = $city;
    }
}