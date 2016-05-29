<?php

use App\Models\User;

require __DIR__ . '/autoload.php';

$user = new User();
$user->name = 'Vasya';
$user->email = 'v@pupkin.ru';
$user->insert();
