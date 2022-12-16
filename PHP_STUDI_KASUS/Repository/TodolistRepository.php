<?php

namespace Repository;

use Entity\Todolist;

interface TodolistRepositry
{
    function save(Todolist $todolist): void;

    function remove(int $id): bool;

    function findAll(): array;
}

class TodolistRepositryImpl implements TodolistRepositry
{

    public array $todolist = [];

    function save(Todolist $todolist): void
    {
        $number = sizeof($this->todolist) + 1;

        $this->todolist[$number] = $todolist;
    }
    function findAll(): array
    {
        return $this->todolist;
    }
    function remove(int $id): bool
    {
        if ($id > sizeof($this->todolist)) {
            return false;
        }

        for ($i = $id; $i < sizeof($this->todolist); $i++) {
            $this->todolist[$i] = $this->todolist[$i + 1];;
        }

        unset($this->todolist[sizeof($this->todolist)]);

        return true;
    }
}
