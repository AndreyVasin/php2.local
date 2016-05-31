<?php

require __DIR__ . '/autoload.php';

$view = new  \App\View();

$view->title = 'Мой крутой сайт';
$view->news = \App\Models\News::findAll();

echo $view->render(__DIR__ . '/App/templates/index.php');
