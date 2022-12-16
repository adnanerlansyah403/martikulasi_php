<?php

namespace View;

use Entity\Todolist;
use Service\TodolistService;
use Helper;
use Helper\InputHelper;

class TodoListView
{

    private TodolistService $todolistService;

    public function __construct(TodolistService $todolist)
    {
        $this->todolistService = $todolist;
    }

    function showTodolist(): void
    {
        while (true) {
            $this->todolistService->showTodolist();

            echo "MENU " . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "3. Keluar" . PHP_EOL;

            $pilihan = InputHelper::input("Pilihan");

            if ($pilihan == "1") {
                $this->addTodolist();
            } else if ($pilihan == "2") {
                $this->removeTodolist();
            } else if ($pilihan == "3") {
                break;
            } else {
                echo "Pilihan tidak di mengerti" . PHP_EOL;
            }
        }

        echo "Sampai Jumpa Lagi" . PHP_EOL;
    }

    function addTodolist(): void
    {
        echo "Menambah Todolist" . PHP_EOL;

        $todo = InputHelper::input("Todo");

        if ($todo == "x") {
            echo "Batal menambah todo" . PHP_EOL;
        } else {
            $this->todolistService->addTodolist($todo);
        }
    }

    function removeTodolist(): void
    {
        echo "Menghapus Todo" . PHP_EOL;

        $pilihan = InputHelper::input("Nomor (x untuk membatalkan)");

        if ($pilihan == "x") {
            echo "Batal menghapus todolist" . PHP_EOL;
        } else {
            $this->todolistService->removeTodolist($pilihan);
        }
    }
}
