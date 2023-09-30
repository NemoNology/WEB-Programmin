<?php

require('/BD connect.php');

function DBCheck($query)
{
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}

function selectAll($table)
{
    global $pdo;
    $sql = "SELECT * FROM $table";
    $query = $pdo->prepare($sql);
    $query->execute();
    DBCheck($query);

    return $query->fetch();
}

function addUser($name, $mail, $password)
{
    global $pdo;
    $sql = "INSERT INTO user_my VALUES ( DEFAULT, $name, $mail, $password );";
    $query = $pdo->prepare($sql);
    $query->execute();
    DBCheck($query);

    return $pdo->lastInsertId();
}

function deleteUser($id)
{
    global $pdo;
    $sql = "DELETE FROM user_my WHERE id == $id;";
    $query = $pdo->prepare($sql);
    $query->execute();

    return DBCheck($query);
}

function updateUser($id, $name, $mail, $password)
{
    global $pdo;
    $sql = "UPDATE user_my SET name = $name, mail = $mail, password = $password WHERE id == $id;";
    $query = $pdo->prepare($sql);
    $query->execute();

    return DBCheck($query);
}

function addJoke($userID, $question, $answer)
{
    global $pdo;
    $sql = "INSERT INTO joke VALUES ( $userID, DEFAULT, $question, $answer );";
    $query = $pdo->prepare($sql);
    $query->execute();

    return DBCheck($query);
}

function deleteJoke($userID, $jokeID)
{
    global $pdo;
    $sql = "DELETE FROM joke WHERE user_id == $userID AND id == $jokeID;";
    $query = $pdo->prepare($sql);
    $query->execute();

    return DBCheck($query);
}

function updateJoke($userID, $jokeID, $question, $answer, $password)
{
    global $pdo;
    $sql = "UPDATE jake SET question = $question, answer = $answer WHERE user_id == $userID AND id == $jokeID;";
    $query = $pdo->prepare($sql);
    $query->execute();

    return DBCheck($query);
}

function isThereUserWithThatMail($mail)
{
    global $pdo;
    $sql = "SELECT * FROM user_my WHERE mail == $mail;";
    $query = $pdo->prepare($sql);
    $query->execute();

    DBCheck($query);

    return $query->rowCount() > 0;
}

function getUserByMailAndPassword($mail, $password)
{
    global $pdo;
    $sql = "SELECT * FROM user_my WHERE mail == $mail AND password == $password;";
    $query = $pdo->prepare($sql);
    $query->execute();

    DBCheck($query);

    return $query->fetch();
}