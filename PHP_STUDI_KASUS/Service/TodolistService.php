<?php

namespace Service;

use Entity\Todolist;
use Repository\TodolistRepositry;
use Repository\TodolistRepositryImpl;

interface TodolistService
{

    function showTodolist(): void;

    function addTodolist(string $todo): void;

    function removeTodolist(int $todo): bool;
}

class TodolistServiceImpl implements TodolistService
{
    private TodolistRepositryImpl $todolistRepository;

    public function __construct(TodolistRepositryImpl $todolist)
    {
        $this->todolistRepository = $todolist;
    }

    public function showTodolist(): void
    {
        global $todolist;

        echo "TODOLIST" . PHP_EOL;

        $todolist = $this->todolistRepository->findAll();
        foreach ($todolist as $key => $todo) {
            echo "$key. " . $todo->getTodo() . PHP_EOL;
        }
    }

    public function addTodolist(string $todo): void
    {
        $todolist = new Todolist($todo);
        $this->todolistRepository->save($todolist);
        echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
    }

    public function removeTodolist(int $id): bool
    {
        if ($this->todolistRepository->remove($id)) {
            echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            return true;
        } else {
            echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            return false;
        }
    }
}
