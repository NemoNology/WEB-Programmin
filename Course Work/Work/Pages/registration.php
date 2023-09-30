<!DOCTYPE html>
<html class="fill">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pe-Pic</title>
  <link rel="stylesheet" href="../Styles/main.css" />
  <link rel="icon" href="../Data/Icons/index.ico" />
</head>

<body class="color-gradient-main fill background-fixed">
  <div class="fill container-column">
    <header class="container-main rounded-one color-light fill-horizontal">
      <h1>
        <a href="./index.php" class="text-style-1 margin-left-medium hover-main">Pe-Pic</a>
      </h1>
    </header>
    <div class="fill container-center">
      <div class="rounded-all-sub color-sub padding-medium">
        <div class="container-center">
          <p class="text-style-2 text-light margin-bottom-medium">
            Регистрация
          </p>
        </div>
        <table class="margin-bottom-medium">
          <tr>
            <td class="text-right">
              <p class="text-light text-bold" name="username">Имя:</p>
            </td>
            <td>
              <input type="text" name="Username" id="username" />
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <p class="text-light text-bold" name="email">Email:</p>
            </td>
            <td>
              <input type="email" name="email" id="email" />
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <p class="text-light text-bold">Пароль:</p>
            </td>
            <td>
              <input type="password" name="password" id="password" />
            </td>
          </tr>
          <tr>
            <td class="text-right">
              <p class="text-light text-bold">Повторите пароль:</p>
            </td>
            <td>
              <input type="password" name="repeatPassword" id="repeatPassword" onchange="" />
            </td>
          </tr>
        </table>
        <div class="container-column">
          <div class="container-center">
            <button type="submit" name="button-registration"
              class="margin-top-small color-main text-light text-style-2 padding-medium rounded-all-sub border-none border-color-light hover-button-simple">
              Зарегистрироваться
            </button>
          </div>
          <div class="container-center">
            <a href="./login.php" class="text-light margin-top-small hover-sub">Войти</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>