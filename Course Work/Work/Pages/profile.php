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
    <div class="container-column container-center fill">
      <div class="container-column color-sub rounded-all padding-medium margin-medium">
        <div class="container-center margin-bottom-medium">
          <p class="text-style-2 text-light">Изменение первичных данных</p>
        </div>
        <table class="text-right">
          <tr>
            <td class="text-light text-bold">Новое имя пользователя:</td>
            <td>
              <input type="text" name="newUsername" id="newUsername" />
            </td>
          </tr>
          <tr>
            <td class="text-light text-bold">Новый email-адрес:</td>
            <td>
              <input type="text" name="newUsername" id="newUsername" />
            </td>
          </tr>
        </table>
        <div class="container-center">
          <button type="submit"
            class="margin-top-small color-main text-light text-bold padding-small rounded-all-sub border-none border-color-light hover-button-simple">
            Изменить данные
          </button>
        </div>
      </div>
      <div class="container-column color-sub rounded-all padding-medium">
        <div class="container-center margin-bottom-medium">
          <p class="text-style-2 text-light">Изменение пароля</p>
        </div>
        <div>
          <table name="profileChangePasswordBeforeSubmitCurrentPassword" class="text-right">
            <tr>
              <td class="text-light text-bold">Текущий пароль:</td>
              <td>
                <input type="password" name="currentPassword" id="currentPassword" />
              </td>
            </tr>
          </table>
          <div class="container-center">
            <button name="submitCurrentPasswordButton" type="submit"
              class="margin-top-small color-main text-light text-bold padding-small rounded-all-sub border-none border-color-light hover-button-simple">
              Подтвердить
            </button>
          </div>
        </div>
        <div name="profileChangePasswordAfterSubmitCurrentPassword" class="hidden">
          <table class="text-right">
            <tr>
              <td class="text-light text-bold">Новый пароль:</td>
              <td>
                <input type="password" name="newPassword" id="newPassword" />
              </td>
            </tr>
            <tr>
              <td class="text-light text-bold">Подтвердите новый пароль:</td>
              <td>
                <input type="password" name="newPassword" id="newPassword" />
              </td>
            </tr>
          </table>
          <div class="container-center">
            <button name="profileSetNewPassword" type="button"
              class="margin-top-small color-main text-light text-bold padding-small rounded-all-sub border-none border-color-light hover-button-simple">
              Изменить пароль
            </button>
          </div>
        </div>
      </div>
      <div class="margin-top-medium">
        <button type="button" name="profileDelete"
          class="padding-small rounded-all-sub color-sub border-none text-style-2 hover-button-simple-1">
          Удалить профиль
        </button>
      </div>
    </div>
  </div>
</body>

</html>