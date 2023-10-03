<?php

require_once 'DB connect.php';

error_reporting(E_ALL);

session_start();

function addUser(string $name, string $mail, string $password)
{
    global $pdo;
    $sql = "INSERT INTO `users` VALUES ( DEFAULT, '$name', '$mail', '$password' );";
    $query = $pdo->prepare($sql);
    $query->execute();

    return getUserByID($pdo->lastInsertId());
}

function deleteUser(int $id)
{
    global $pdo;
    $sql = "DELETE FROM `users` WHERE `id` = $id;";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function updateUser(int $id, string $name, string $mail, string $password)
{
    global $pdo;
    $sql = "UPDATE `users` SET `name` = '$name', `mail` = '$mail', `password` = '$password' WHERE `id` = $id;";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function addJoke(int $userID, string $question, string $answer)
{
    global $pdo;
    $sql = "INSERT INTO `jokes` VALUES ( $userID, DEFAULT, '$question', '$answer' );";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function deleteJoke(int $userID, int $jokeID)
{
    global $pdo;
    $sql = "DELETE FROM `jokes` WHERE `user_id` = $userID AND `id` = $jokeID;";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function updateJoke(int $userID, int $jokeID, string $question, string $answer)
{
    global $pdo;
    $sql = "UPDATE `jokes` SET `question` = '$question', `answer` = '$answer' WHERE `user_id` = $userID AND `id` = $jokeID;";
    $query = $pdo->prepare($sql);
    $query->execute();
}

function getAllJokesByUserID(int $userID)
{
    global $pdo;
    $sql = "SELECT * FROM `jokes` WHERE `user_id` = '$userID';";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function isThereJokeWithThisID(int $jokeID): bool
{
    global $pdo;
    $sql = "SELECT * FROM `jokes` WHERE `id` = '$jokeID';";
    $query = $pdo->prepare($sql);
    $query->execute();

    return ($query->rowCount() > 0);
}

function isThereUserWithThatMail(string $mail)
{
    global $pdo;
    $sql = "SELECT * FROM `users` WHERE `mail` = '$mail';";
    $query = $pdo->prepare($sql);
    $query->execute();

    return ($query->rowCount() > 0);
}

function getUserByMailAndPassword(string $mail, string $password)
{
    global $pdo;
    $sql = "SELECT * FROM `users` WHERE `mail` = '$mail' AND `password` = '$password';";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}

function getUserByID(int $id)
{
    global $pdo;
    $sql = "SELECT * FROM `users` WHERE `id` = $id;";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}