<?php
//Подключение к БД
//DB connection
$log = 'root';
$pas = 'mysql';
try {
    $pdo = new PDO('mysql:dbname=kit-expert;host=localhost', $log, $pas);
} catch (PDOException $e) {
    die($e->getMessage());
}



