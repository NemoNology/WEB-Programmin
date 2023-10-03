<!DOCTYPE html>
<html class="fill">

<?php require '../PHP/userProfile.php'; ?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Pe-Pic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../Styles/main.css" />
  <link rel="icon" href="../Assets/Icons/index.ico" />
</head>

<body class="color-gradient-main background-fixed fill">
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

  <div class="fill container-column container-center">
    <div class="container-column color-sub rounded-all padding-small">
      <div class="container-center margin-bottom-medium">
        <p class="text-style-2 text-light">Изменение первичных данных</p>
      </div>
      <div class="container-center">
        <p class="text-error">
          <?= $errorMessageNotPassword ?>
        </p>
      </div>
      <form method="post">
        <table class="text-right">
          <tr>
            <td class="text-light text-bold">Новое имя пользователя:</td>
            <td>
              <input type="text" name="name" value="<?= $_SESSION['name']; ?>" />
            </td>
          </tr>
          <tr>
            <td class="text-light text-bold">Новый email-адрес:</td>
            <td>
              <input type="text" name="mail" value="<?= $_SESSION['mail']; ?>" />
            </td>
          </tr>
        </table>
        <div class="container-center">
          <button type="submit"
            class="margin-top-small color-main text-light text-bold padding-small rounded-all-sub border-none border-color-light hover-button-simple">
            Изменить данные
          </button>
        </div>
      </form>
    </div>
    <div class="container-column color-sub rounded-all padding-small margin-top-small">
      <div class="container-center margin-bottom-medium">
        <p class="text-style-2 text-light">Изменение пароля</p>
      </div>
      <div class="container-center">
        <p class="text-error">
          <?= $errorMessagePassword ?>
        </p>
      </div>
      <form method="post">
        <table class="text-right">
          <tr>
            <td class="text-light text-bold">Новый пароль:</td>
            <td>
              <input type="password" name="newPassword" />
            </td>
          </tr>
          <tr>
            <td class="text-light text-bold">Подтвердите новый пароль:</td>
            <td>
              <input type="password" name="newPasswordRepeat" />
            </td>
          </tr>
        </table>
        <div class="container-center">
          <button type="submit"
            class="margin-top-small color-main text-light text-bold padding-small rounded-all-sub border-none border-color-light hover-button-simple">
            Изменить пароль
          </button>
        </div>
      </form>
    </div>
    <form method="post" class="margin-top-small container-column">
      <button type="submit" name='logoutButton'
        class="padding-small rounded-all-sub color-main border-none text-bold text-light hover-button-simple">
        Выйти из профиля
      </button>
      <button type="submit" name='deleteButton'
        class="padding-small rounded-all-sub color-sub border-none text-style-2 hover-button-simple-1 margin-top-small">
        Удалить профиль
      </button>
    </form>
  </div>

</body>

</html>