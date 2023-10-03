<!DOCTYPE html>
<html class="fill">
<?php require('../PHP/userRegistration.php'); ?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Pe-Pic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../Styles/main.css" />
  <link rel="icon" href="../Assets/Icons/index.ico" />
</head>

<body class="color-gradient-main fill background-fixed">
  <div class="fill container-column">
    <header class="container-main rounded-one color-light fill-horizontal fixed">
      <h1>
        <a href="./index.php" class="text-style-1 text-black margin-left-medium hover-main">Pe-Pic
        </a>
      </h1>
      <div>
        <?php if (is_null($_SESSION['id'])): ?>
          <div>
            <a class="text-style-2 padding-small hover-sub" href="./login.php">Вход</a>
            <a class="text-style-2 padding-small hover-sub" href="./registration.php">Регистрация</a>
          </div>
        <?php else: ?>
          <a href="./profile.php" class="text-style-2 padding-small hover-sub">
            <?= $_SESSION['name'] ?>
          </a>
        <?php endif; ?>
      </div>
    </header>

    <div class="fill container-center">
      <form class="rounded-all-sub color-sub padding-medium" method="post">
        <div class="container-center">
          <p class="text-style-2 text-light margin-bottom-medium">
            Регистрация
          </p>
        </div>
        <table class="margin-bottom-medium">
          <tr>
            <td class="text-right">
              <p class="text-light text-bold">Имя:</p>
            </td>
            <td>
              <input type="text" name="name" value="<?= $name ?>" />
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <p class="text-light text-bold">Email:</p>
            </td>
            <td>
              <input type="email" name="mail" value="<?= $mail ?>" />
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <p class="text-light text-bold">Пароль:</p>
            </td>
            <td>
              <input type="password" name="password" />
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <p class="text-light text-bold">Повторите пароль:</p>
            </td>
            <td>
              <input type="password" name="repeatPassword" />
            </td>
          </tr>
        </table>
        <div class="container-center">
          <p class="text-italic">
            <?= $errorMessage ?>
          </p>
        </div>
        <div class="container-column">
          <div class="container-center">
            <button type="submit"
              class="margin-top-small color-main text-light text-style-2 padding-medium rounded-all-sub border-none border-color-light hover-button-simple">
              Зарегистрироваться
            </button>
          </div>
          <div class="container-center">
            <a href="./login.php" class="text-light margin-top-small hover-sub">Войти</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>