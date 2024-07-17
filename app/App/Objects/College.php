<?php
namespace App\Objects;

class College extends School
{
    protected array $levels = ['6ème', '5ème', '4ème', '3ème'];

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