<!DOCTYPE html>
<html class="fill">

<?php require '../PHP/userLogin.php'; ?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Pe-Pic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../Styles/main.css" />
  <link rel="icon" href="../Assets/Icons/index.ico" />
</head>

<body class="color-gradient-main fill background-fixed">
  <div class="container-column fill">
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

    <form method="post" class="container-column container-center fill">
      <div class="container-column color-sub rounded-all-sub padding-medium margin-medium">
        <div class="container-center">
          <p class="text-style-2 text-light margin-bottom-medium">
            Авторизация
          </p>
        </div>
        <table class="text-right margin-bottom-medium">
          <tr>
            <td>
              <p class="text-bold text-light">Email:</p>
            </td>
            <td>
              <input type="email" name="mail" value="<?= $mail ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <p class="text-bold text-light">Пароль:</p>
            </td>
            <td>
              <input type="password" name="password" />
            </td>
          </tr>
        </table>
        <div class="container-center">
          <p class="text-italic">
            <?= $errorMessage ?>
          </p>
        </div>
        <div class="container-center margin-top-medium">
          <div class="container-column">
            <button type="submit"
              class="rounded-all-sub border-none padding-small text-style-2 text-light color-main hover-button-simple">
              Войти
            </button>
            <div class="container-center">
              <a href="./registration.php" class="hover-sub text-light margin-top-small">Зарегистрироваться</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>