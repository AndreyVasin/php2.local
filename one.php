<?php

require __DIR__ . '/autoload.php';

$view = new  \App\View();

$contoller = new \App\Controlers\News();
$contoller->action('One');
