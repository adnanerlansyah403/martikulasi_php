<?php

require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";
require_once __DIR__ . "/Helper/Input.php";

use Entity\Todolist;
use Repository\TodolistRepositryImpl;
use Service\TodolistServiceImpl;
use View\TodoListView;

echo "Aplikasi Todolist" . PHP_EOL;

$todolistRepository = new TodolistRepositryImpl();
$todolistService = new TodoListServiceImpl($todolistRepository);
$todolistView = new TodoListView($todolistService);

$todolistView->showTodolist();
