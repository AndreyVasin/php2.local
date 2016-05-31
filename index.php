<?php

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];

$contoller = new \App\Controlers\News();

$action = $_GET['action'] ?: 'Index';

$contoller->action($action);
