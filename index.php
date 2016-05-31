<?php

require __DIR__ . '/autoload.php';

$view = new  \App\View();

$contoller = new \App\Controlers\News();

$action = $_GET['action'] ?: 'Index';

$contoller->action($action);
