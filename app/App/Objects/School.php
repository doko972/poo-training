<?php
namespace App\Objects;

spl_autoload_register();

class School extends Person
{
    protected string $school;
    protected string $city;

    public function __construct(string $lastname, string $firstname, string $school, string $city)
    {
        parent::__construct($lastname, $firstname);
        $this->school = $school;
        $this->city = $city;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------

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

    /**
     * Get the value of city
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @param string $city
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }
}
?>