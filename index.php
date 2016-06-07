<?php

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];

if (isset($_GET['ctrl'])){
  $ctrl = $_GET['ctrl'] ?: 'News';
  $ctrl = '\App\Controlers' . '\\' . $ctrl;

}else{
  $ctrl = '\App\Controlers\News';
}

$contoller = new $ctrl();
//$contoller = new \App\Controlers\News();

$action = $_GET['action'] ?: 'Index';

$contoller->action($action);