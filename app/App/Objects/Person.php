<?php
namespace App\Objects;

class Person
{
    protected string $lastname;
    protected string $firstname;
    protected string $school;

    /**
     * Create a new student
     *
     * @param string $lastname
     * @param string $firstname
     */
    public function __construct(string $lastname, string $firstname, string $school = '')
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->school = $school;

    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }
    /**
     * Set the school name
     *
     * @param string $school
     * @return void
     */
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

        /**
     * Get the value of school
     */
    public function getSchool(): string
    {
        return $this->school;
    }

    // -------------------
    // INSTANCE METHODS
    // -------------------

}