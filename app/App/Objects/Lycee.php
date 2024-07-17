<?php
namespace App\Objects;

class Lycee extends School
{
    protected array $levels = ['Seconde', 'Première', 'Terminale'];

    public function __construct(string $name, string $city)
    {
        parent::__construct($name, $city, $this->levels);
    }

    public function getLevels(): array
    {
        return $this->levels;
    }

    public function setLevels(array $levels): self
    {
        $this->levels = $levels;
        return $this;
    }
}
?>