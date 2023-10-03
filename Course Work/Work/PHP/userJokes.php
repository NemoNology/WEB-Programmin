<?php

error_reporting(E_ALL);
require './DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

} else {
    $jokes = getAllJokesByUserID($_SESSION['id']);
    var_dump($_SESSION['id']);
    var_dump($jokes);
    die();
    $jokesCount = count($jokes);
}