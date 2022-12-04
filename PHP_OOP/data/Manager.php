<?php

class Manager
{
    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function sayHello(string $name): void
    {
        echo "Hi Manager $name, My name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    public function sayHello(string $name): void
    {
        echo "Hi VP $name, My name is $this->name" . PHP_EOL;
    }
}
