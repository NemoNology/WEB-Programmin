<?php
error_reporting(E_ALL);
require $_SERVER['DOCUMENT_ROOT'] . '/Course Work/Work/PHP/DB.php';
?>

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