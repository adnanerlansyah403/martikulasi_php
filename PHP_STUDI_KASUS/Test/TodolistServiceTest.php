<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist()
{

    $todolistRepository = new TodolistRepositryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP Dasar");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP Database");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

testShowTodolist();


function testAddTodolist()
{

    $todolistRepository = new TodolistRepositryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
}

testAddTodolist();


function testRemoveTodolist()
{

    $todolistRepository = new TodolistRepositryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->removeTodolist(1);
    $todolistService->removeTodolist(4);

    // $todolistService->showTodolist();

    $todolistService->showTodolist();
}

testRemoveTodolist();
