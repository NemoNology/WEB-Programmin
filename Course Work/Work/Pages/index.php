<!DOCTYPE html>
<html class="fill">

<?php
error_reporting(E_ALL);
require '../PHP/DB.php';
$errorMessage = '';
$id = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $jokeID = $_POST['jokeID'];
  $question = $_POST['jokeQuestion'];
  $answer = $_POST['jokeAnswer'];

  if (!is_null($_POST['addButton'])) {
    if ($question === '' || $answer === '') {
      $errorMessage = 'Вы не заполнили шутку';
    } else {
      addJoke($id, $question, $answer);
      header('Location: ./index.php');
    }
  } elseif (!is_null($_POST['updateButton'])) {
    if ($jokeID === '' || $question === '' || $answer === '') {
      $errorMessage = 'Все поля должны быть заполнены';
    } elseif (!isThereJokeWithThisID($jokeID)) {
      $errorMessage = 'Неверный номер шутки';
    } else {
      updateJoke($id, $jokeID, $question, $answer);
      header('Location: ./index.php');
    }
  } elseif (!is_null($_POST['deleteButton'])) {
    if (!isThereJokeWithThisID($jokeID)) {
      $errorMessage = 'Неверный номер шутки';
    } else {
      deleteJoke($id, $jokeID);
      header('Location: ./index.php');
    }
  }
} else {
  $jokes = getAllJokesByUserID($id);
  $jokesCount = count($jokes);
}
?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Pe-Pic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../Styles/main.css" />
  <link rel="icon" href="../Assets/Icons/index.ico" />
</head>

<body class="color-gradient-main background-fixed">
  <header class="container-main rounded-one color-light fill-horizontal">
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
        <div class="container-row">
          <a href="./profile.php" class="text-style-2 padding-small hover-sub">
            <?= $_SESSION['name'] ?>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </header>

  <div class="fill container-center container-column padding-medium">
    <?php if (is_null($_SESSION['id'])): ?>
      <div class="container-column rounded-two padding-big color-gradient-radial-main">
        <p class="text-style-1 text-light margin-medium">
          Надоело забывать смешные анекдоты в форме "вопрос-ответ"?
        </p>
        <p class="text-style-2 text-light text-right">
          Здесь Вы сможете сохранить все анекдоты
        </p>
      </div>
    <?php else: ?>
      <div class="padding-medium container-center rounded-all-sub color-main">
        <form method="post">
          <div class="container-column">
            <p>
              <?= $errorMessage ?>
            </p>
            <table>
              <tr>
                <td class="text-right">
                  <p class="text-light text-bold">Номер шутки (#):</p>
                </td>
                <td>
                  <input type="text" name="jokeID" value="<?php if (!is_null($jokes[0][1])) {
                    echo $jokes[0][1];
                  } else {
                    echo 0;
                  } ?>" />
                </td>
              </tr>
              <tr>
                <td class="text-right">
                  <p class="text-light text-bold">Вопрос:</p>
                </td>
                <td>
                  <input type="text" name="jokeQuestion" />
                </td>
              </tr>
              <tr>
                <td class="text-right">
                  <p class="text-light text-bold">Ответ:</p>
                </td>
                <td>
                  <input type="text" name="jokeAnswer" />
                </td>
              </tr>
            </table>
            <div class="container-column text-light">
              <button type="submit" name="addButton"
                class="padding-small margin-small rounded-all-sub color-sub border-none text-bold hover-button-simple">Добавить
                шутку</button>
              <button type="submit" name="updateButton"
                class="padding-small margin-small rounded-all-sub color-sub border-none text-bold hover-button-simple">Изменить
                шутку под выбранным номером</button>
              <button type="submit" name="deleteButton"
                class="padding-small margin-top-small rounded-all-sub color-sub border-none text-bold hover-button-simple-1">Удалить
                шутку под выбранным
                номером</button>
            </div>
          </div>
        </form>
      </div>
      <table class="fill-horizontal color-light text-center table-main margin-top-small min-size-zero">
        <th>#</th>
        <th>Вопрос</th>
        <th>Ответ</th>
        <?php for ($i = 0; $i < $jokesCount; $i++) {
          echo '<tr><td>' . $jokes[$i][1] . '</td><td>' . $jokes[$i][2] . '</td><td>' . $jokes[$i][3] . '</td></tr>';
        } ?>
      </table>
    <?php endif; ?>
  </div>

</body>

</html>