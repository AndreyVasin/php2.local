<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();
$data = $db->query('SELECT * FROM foo');
var_dump($data);
