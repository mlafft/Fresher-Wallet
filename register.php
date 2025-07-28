<?php

include_once "./vendor/session.php";

if (isset ($_SESSION['id']) ):
    echo $_SESSION['id'];
endif;

if (!empty ($_SESSION['id']) ):
    header ("Location: /index.php");
    exit;
endif;

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php require_once "./components/head.php"?>

        <title>Учётная записи</title>
        <link rel="stylesheet" href="./styles/signing.css">
    </head>
    <body>
        <button id="switch-theme"></button>

        <div class="title-box">
            <h1 class="title-row">Кошель</h1>
        </div>

        <form action="action/registration.php" method="POST" class="sign-form">
            <label for="user_name">имя</label>
            <input type="text" class="input-line" id="user_name" name="user_name" required>
            
            <label for="email">почта</label>
            <input type="email" class="input-line" id="email" name="email" required>
            
            <label for="pass">пароль</label>
            <input type="password" class="input-line" id="pass" name="pass" required>
            
            <label for="pass">повторите пароль</label>
            <input type="password" class="input-line" id="pass_conf" name="pass_conf" required>

            <div class="buttons">
                <input type="submit" class="button" value="создать">
                <button class="button" type="button"><a href="sign_in.php">есть учётная запись</a></button>
            </div>
        </form>
        
        <script src="script/main.js"></script>
    </body>
</html>