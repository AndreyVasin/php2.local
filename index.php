<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();
include __DIR__ . '/App/templates/index.php';
