<?php

use App\Models\User;

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

//var_dump($users[0]->getEmail());
function sendEmail(\App\Models\HasEmail $user, string $massage)
{
  echo "Почта уходит на " . $user->email;
}

sendEmail($users[0], 'Hello!');
