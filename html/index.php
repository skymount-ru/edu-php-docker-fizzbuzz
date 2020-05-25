<?php
require dirname(__DIR__) . '/vendor/autoload.php';

header('Content-Type: application/json');

$app = new \App\FizzBuzz();
echo json_encode($app->say(@$_GET['n']));
