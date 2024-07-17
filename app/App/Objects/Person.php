<?php
namespace App\Objects;

spl_autoload_register();

class Person
{
    protected static string $sentence = "Bonjour ##lastname## ##firstname##";
    protected string $lastname;
    protected string $firstname;

    /**
     * Create a new person
     *
     * @param string $lastname
     * @param string $firstname
     */
    public function __construct(string $lastname, string $firstname)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
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

    // -------------------
    // INSTANCE METHODS
    // -------------------

}
?>