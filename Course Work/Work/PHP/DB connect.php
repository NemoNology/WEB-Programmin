<?php

$driver = 'mysql';
$host = 'localhost';
// $dataBaseName = 'webdevdb';
$dataBaseName = 'test';
$dataBaseUser = 'root';
$dataBasePassword = '123';
$charset = 'utf8';

try {
    $pdo = new PDO(
        "$driver:host=$host;dbname=$dataBaseName;charset=$charset",
        $dataBaseUser,
        $dataBasePassword,
        $options
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e);
}