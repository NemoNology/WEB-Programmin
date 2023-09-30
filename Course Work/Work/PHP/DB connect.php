<?php

$driver = 'mysql';
$host = 'localhost';
// $dataBaseName = 'webdevdb';
$dataBaseName = 'test';
$dataBaseUser = 'root';
$dataBasePassword = '123';
$charset = 'utf8';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO(
        "$driver:host=$host;dbname=$dataBaseName;charset=$charset",
        $dataBaseUser,
        $dataBasePassword,
        $options
    );
} catch (PDOException $e) {
    die($e);
}