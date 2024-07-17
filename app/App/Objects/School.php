<?php
namespace App\Objects;

class School
{
    protected string $name;
    protected string $city;
    protected array $levels;

    public function __construct(string $name, string $city, array $levels = [])
    {
        $this->name = $name;
        $this->city = $city;
        $this->levels = $levels;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getLevels(): array
    {
        return $this->levels;
    }

    public function addLevel(string $level): void
    {
        $this->levels[] = $level;
    }

    public function hasLevel(string $level): bool
    {
        return in_array($level, $this->levels);
    }
    /**
     * Boolean to check level
     * @param string $level 
     * @return string
     */
    public function checkLevel(string $level): string
    {
        if ($this->hasLevel($level)) {
            return 'Oui';
        } else {
            return 'Non';
        }
    }
}
?>