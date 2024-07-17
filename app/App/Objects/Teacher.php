<?php
namespace App\Objects;

spl_autoload_register();

class Teacher extends Person
{
    private array $discipline;
    private string $school;

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
        parent::__construct($lastname, $firstname);
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
     * @param array $discipline
     * @return Teacher
     */
    public function setDiscipline(array $discipline): Teacher
    {
        $this->discipline = $discipline;
        return $this;
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
     * Add a discipline to a teacher
     *
     * @param string $newDiscipline
     * @return void
     */
    public function addDiscipline(string $newDiscipline): void
    {
        $this->discipline[] = $newDiscipline;
    }

    /**
     * Delete an existing discipline from a teacher
     *
     * @param string $discipline
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
     * Get a string of disciplines separated by a comma
     *
     * @return string
     */
    public function showDisciplines(): string
    {
        return implode(", ", $this->discipline);
    }

    /**
     * Introduce myself with a sentence
     *
     * @return string
     */
    public function introduceMyself(): string
    {
        return 'Bonjour, je m\'appelle ' . $this->getLastname() . ' ' . $this->getFirstname() . " et j'enseigne à l'école " 
        . $this->getSchool() . " les matières suivantes : " . $this->showDisciplines() . ".";
    }
}
?>