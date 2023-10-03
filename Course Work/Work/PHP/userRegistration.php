<?php
require "DB.php";

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $mail = trim($_POST['mail']);
    $password = trim($_POST['password']);
    $repeatPassword = trim($_POST['repeatPassword']);

    if ($name === '' || $mail === '' || $password === '') {
        $errorMessage = 'Все поля должны быть заполнены';
    } elseif ($password !== $repeatPassword) {
        $errorMessage = 'Пароли не совпадают';
    } elseif (isThereUserWithThatMail($mail)) {
        $errorMessage = 'Данная почта уже занята';
    } else {
        $user = addUser($name, $mail, $password);
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['mail'] = $user['mail'];
        $_SESSION['password'] = $user['password'];
        header('Location: ../Pages/index.php');
    }
} else {
    $name = '';
    $mail = '';
}