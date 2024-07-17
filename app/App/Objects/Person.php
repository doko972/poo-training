<?php
namespace App\Objects;

spl_autoload_register();

class Person
{
    protected static string $sentence = 'Bonjour, je m\'appelle ##lastname## ##firstname##';
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


    /**
     * Introduce my self with a sentence.
     *
     * @return string
     */
    public function introduceMySelf(): string
    {
        return preg_replace_callback(
            '/##(\w+)##/',
            fn($m) => $this->getValueFromKey($m[1]),
            static::$sentence
        );

        // Looking for keys to replace in the sentence
        // preg_match_all('/##(\w+)##/', static::$sentence, $match);

        // Get a value for each key matching a property or method name
        // $values = array_map([$this, 'getValueFromKey'], $match[1]);
        // $values = [];
        // foreach ($match[1] as $key) {
        //     $values[] = $this->getValueFromKey($key);
        // }

        // Replace each key in the sentence with its value
        // return str_replace($match[0], $values, static::$sentence);
    }

    /**
     * Get a value from a property or method name
     *
     * @param string $key - Property or method name
     * @return string - value from property or method
     */
    private function getValueFromKey(string $key): string
    {
        if (isset($this->$key))
            return $this->$key;

        if (in_array($key, get_class_methods($this)))
            return $this->$key();

        return '';
    }

}
?>