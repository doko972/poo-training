<?php
namespace App\Objects;

class PrimarySchool extends School
{
    protected array $levels = ['CP', 'CE1', 'CE2', 'CM1', 'CM2'];

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