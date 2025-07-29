<?php

include_once "./vendor/session.php";

// if (isset ($_SESSION) ):
//     print_r ($_SESSION);
// endif;

if (!empty ($_SESSION['id']) ):
    header ("Location: /index.php");
    exit;
endif;

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php require_once "./components/head.php"?>
        
        <title>Вход</title>
        <link rel="stylesheet" href="./styles/signing.css">
    </head>
    <body>
        <button id="switch-theme"></button>

        <div class="title-box">
            <h1 class="title-row">Кошель</h1>
        </div>

        <form action="/action/sign_in.php" method="POST" class="sign-form">
            <label for="name">имя или почту</label>
            <input type="text" name="name" class="input-line" id="name"> 
            
            <label for="pass">пароль</label>
            <input type="password" name="pass" class="input-line" id="pass">
            
            <div class="buttons">
                <input class="button" type="submit" value="войти">
                <button class="button" type="button">
                    <a href="register.php">создать учётную запись</a>
                </button>
            </div>
        </form>
        
        <script src="script/main.js"></script>
    </body>
</html>