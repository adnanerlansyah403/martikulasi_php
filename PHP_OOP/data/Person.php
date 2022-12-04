<?php

class Person
{

    const AUTHOR = "My Programmer";

    var string $name;
    var ?string $address;
    var string $country = "Indonesia";

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hello my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name, my name is {$this->name}" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}
