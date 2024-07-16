<?php
namespace App\Objects;

spl_autoload_register();

use App\Objects\Person;

class Teacher extends Person
{
    private array $discipline;

    /**
     * Create a new teacher
     *
     * @param string $firstname
     * @param string $lastname
     * @param array $discipline
     * @param string $school
     */
    public function __construct(string $firstname, string $lastname, array $discipline = [], string $school = '')
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->discipline = $discipline;
        $this->school = $school;
    }
    // -------------------
    // GETTERS AND SETTERS
    // -------------------

    /**
     * Get the value of discipline
     */
    public function getDiscipline(): array
    {
        return $this->discipline;
    }

    /**
     * Set the value of discipline
     *
     * @return  self
     */
    public function setDiscipline(array $discipline): Teacher
    {
        $this->discipline = $discipline;

        return $this;
    }

    // -------------------
    // INSTANCE METHODS
    // -------------------

    /**
     * Add a discipline to a teacher.
     *
     * @param string $newDiscipline - The name of new discipline.
     * @return void
     */
    public function addDiscipline(string $newDiscipline): void
    {
        $this->discipline[] = $newDiscipline;
    }

    /**
     * Delete an existing discilpline from a teacher or false.
     *
     * @param string $discipline - The discipline to delete
     * @return void
     */
    public function deleteDiscipline(string $discipline): void
    {
        $key = array_search($discipline, $this->discipline);
        if ($key !== false) {
            unset($this->discipline[$key]);
        }
    }

    /**
     * Get a string of disciplines separated by a coma.
     *
     * @return string 
     */
    public function showDisciplines(): string
    {
        return implode(", ", $this->discipline);
    }

    /**
     * Introduce my self with a sentence.
     *
     * @return string
     */
    public function introduceMySelf(): string
    {
        return 'Bonjour, je m\'appelle ' . $this->getLastname() . ' ' . $this->getFirstname()." et j'enseigne à l'école "
        .$this->getSchool()." les matières suivantes : ".$this->showDisciplines().".";
    }
}