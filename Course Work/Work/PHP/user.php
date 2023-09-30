<?php
include('/DS.php');

$errorMassage = '';

if (isset($_POST['button-registration'])) {
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $repeatPassword = trim($_POST['repeatPassword']);
}

if ($name === '' || $email === '' || $password === '') {
    $errorMassage = 'Все поля должны быть заполнены';
} elseif ($password !== $repeatPassword) {
    $errorMassage = 'Пароли не совпадают';
} elseif (isThereUserWithThatMail($email)) {
    $errorMassage = 'Данная почта уже используется';
} else {
    $errorMassage = '';
    addUser($name, $email, $password);
}