<?php

namespace App\Objects;

spl_autoload_register();

use DateTime;

class Student extends Person
{
    private DateTime $birthDate;
    private string $level;
    private string $school;

    /**
     * Create a new student
     *
     * @param string $lastname
     * @param string $firstname
     * @param DateTime $birthDate
     * @param string $level
     * @param string $school
     */
    public function __construct(string $lastname, string $firstname, DateTime $birthDate, string $level, string $school)
    {
        parent::__construct($lastname, $firstname);
        $this->birthDate = $birthDate;
        $this->level = $level;
        $this->school = $school;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------

    /**
     * Set the level name
     *
     * @param string $level
     * @return void
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    /**
     * Get the level name
     *
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * Get the value of birthDate
     * @return DateTime
     */
    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @param DateTime $birthDate
     * @return void
     */
    public function setBirthDate(DateTime $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Get the value of school
     * @return string
     */
    public function getSchool(): string
    {
        return $this->school;
    }

    /**
     * Set the value of school
     *
     * @param string $school
     * @return void
     */
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    // -------------------
    // INSTANCE METHODS
    // -------------------

    /**
     * Get my age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->birthDate->diff(new DateTime())->y;
    }

    /**
     * Introduce myself with a sentence
     *
     * @return string
     */
    public function introduceMyself(): string
    {
        return 'Bonjour, je m\'appelle ' . $this->getLastname() . ' ' . $this->getFirstname() 
        . ', j\'ai ' . $this->getAge() . ' ans et je vais à l\'école ' 
        . $this->getSchool() . ' en classe de ' . $this->getLevel() . '.';
    }
}
?>