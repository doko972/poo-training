<?php

class Student
{
    private string $firstName;
    private string $lastName;
    private int $age;
    private string $level;
    private string $birthdate;
    private string $schoolName;

    /**
     * Summary of __construct
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     * @param string $level
     * @param string $birthdate
     * @param string $schoolName
     */
    public function __construct(string $firstName, string $lastName, int $age, string $level, string $birthdate, string $schoolName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->level = $level;
        $this->birthdate = $birthdate;
        $this->schoolName = $schoolName;
    }

    /**
     * get the first name
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * set the first name
     * @param string $firstName
     * @return void
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * get the last name
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * set the last  name
     * @param string $lastName
     * @return void
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * get age
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * set age
     * @param int $age
     * @return void
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * get birthday
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * set birthday
     * @param string $birthdate
     * @return void
     */
    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * calculate age
     * @return int
     */
    public function calculateAge(): int
    {
        $birthdate = new DateTime($this->birthdate);
        $today = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }

    /**
     * get level
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * set level
     * @param string $level
     * @return void
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    /**
     * get school name
     * @return string
     */
    public function getSchoolName(): string
    {
        return $this->schoolName;
    }

    /**
     * set school name
     * @param string $schoolName
     * @return void
     */
    public function setSchoolName(string $schoolName): void
    {
        $this->schoolName = $schoolName;
    }
}