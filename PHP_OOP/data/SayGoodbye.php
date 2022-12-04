<?php

namespace Data\Traits;

class ParentPerson
{


    public function goodBye(?string $name)
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name)
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

trait SayGoodbye
{
    public string $name;

    function goodBye(?string $name)
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Goodbye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function hello(?string $name)
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello  $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

trait All
{
    use SayGoodbye, SayHello, HasName {
        // hello as private;
        // goodBye as private;
    }
}

class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}
