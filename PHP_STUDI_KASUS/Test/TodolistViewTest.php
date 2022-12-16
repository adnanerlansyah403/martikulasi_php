<?php

require_once __DIR__ . "./../Entity/Todolist.php";
require_once __DIR__ . "./../Repository/TodolistRepository.php";
require_once __DIR__ . "./../Service/TodolistService.php";
require_once __DIR__ . "./../View/TodolistView.php";
require_once __DIR__ . "./../Helper/Input.php";

use Repository\TodolistRepositryImpl;
use Service\TodolistServiceImpl;
use View\TodoListView;

function testViewShowTodolist(): void
{

    $todolistRepository = new TodolistRepositryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");

    $todolistView->showTodolist();
}

// testViewShowTodolist();

function testViewAddTodolist(): void
{

    $todolistRepository = new TodolistRepositryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");

    $todolistView->addTodolist();

    $todolistView->showTodolist();
}

// testViewAddTodolist();

function testViewRemoveTodolist(): void
{

    $todolistRepository = new TodolistRepositryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP MVC");

    $todolistView->showTodolist();

    $todolistView->removeTodolist();

    $todolistView->showTodolist();

    $todolistView->removeTodolist();

    $todolistView->showTodolist();
}

testViewRemoveTodolist();
