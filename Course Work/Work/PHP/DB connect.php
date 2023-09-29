<?php

$driver = 'mysql';
$host = 'localhost';
$dataBaseName = 'webdevdb';
$dataBaseUser = 'root';
$dataBasePassword = '123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO(
        "$driver:host=$host;dbname=$dataBaseName;charset=$charset",
        $dataBaseUser,
        $dataBasePassword,
        $options
    );
} catch (PDOException $e) {
    die("DataBase connection error");
}