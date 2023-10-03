<?php
require "DB.php";

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = trim($_POST['mail']);
    $password = trim($_POST['password']);

    if ($mail === '' || $password === '') {
        $errorMessage = 'Все поля должны быть заполнены';
    } else {
        $result = getUserByMailAndPassword($mail, $password);
        if (!$result) {
            $errorMessage = 'Неверные данные пользователя';
        } else {
            $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['mail'] = $result['mail'];
            $_SESSION['password'] = $result['password'];
            header('Location: ../Pages/index.php');
        }
    }
} else {
    $mail = '';
}