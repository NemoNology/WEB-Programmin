<?php
require "DB.php";

$errorMessageNotPassword = '';
$errorMessagePassword = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $newPassword = $_POST['newPassword'];
    $newPasswordRepeat = $_POST['newPasswordRepeat'];

    if (!is_null($name) || !is_null($mail)) {
        // echo 'naming... [[][]]';
        if ($name === '' || $mail === '') {
            $errorMessageNotPassword = 'Все поля должны быть заполнены';
        } else {
            updateUser($id, $name, $mail, $_SESSION['password']);
            $_SESSION['name'] = $name;
            $_SESSION['mail'] = $mail;
            $errorMessageNotPassword = 'Данные успешно обновлены';
        }
    } elseif ($newPassword) {
        // echo 'pass is not null [[][]]';
        if ($newPassword === '' || $newPasswordRepeat === '') {
            $errorMessagePassword = 'Все поля должны быть заполнены';
        } elseif ($newPassword !== $newPasswordRepeat) {
            $errorMessagePassword = 'Пароли не одинаковы';
        } else {
            updateUser($id, $_SESSION['name'], $_SESSION['mail'], $newPassword);
            $_SESSION['password'] = $newPassword;
            $errorMessagePassword = 'Данные успешно обновлены';
        }
    } elseif (!is_null($_POST['logoutButton'])) {
        signout();
    } elseif (!is_null($_POST['deleteButton'])) {
        deleteThisUser();
    }
}

function deleteThisUser()
{
    deleteUser($_SESSION['id']);
    signout();
}

function signout()
{
    session_unset();
    header('Location: ../Pages/index.php');
}