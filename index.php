<?php

use Todo\Models\Task;
use Todo\Storage\MySqlDatabaseTaskStorage;
use Todo\TaskManager;


session_start();

require 'vendor/autoload.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=todo', 'root', '');

$storage = new MySqlDatabaseTaskStorage($db);
$manager = new TaskManager($storage);

$task = new Task;
$task->setDescription('A new task');
$task->setDue(new DateTime);

$manager->addTask($task);

