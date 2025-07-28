<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Fresher Wallet</title>
        
        <?php require_once "./components/head.php"?>
    </head>
    <body>
        <button id="switch-theme"></button>
        
        <?php include_once "components/form.php"?>
        
        <button class=" logout button"><a href="./log_out.php">выйти</a></button>

        <section class="header">
            <div class="container">

                <div class="profile"> 
                    <div class="account"><?=$_SESSION['user']['name']?></div>
                </div>

                <?php include_once "components/balance.php"?>

            </div>
        </section>
        <section class="main">
            <div class="container">

                <div class="add-new">
                    <div class="borders" onmousedown="return false">добавить</div>
                </div>

                <div class="storage">
                    <?php include_once "components/load.php" ?>
                </div>

            </div>
        </section>
        <footer class="footer"></footer>

        <script src="script/main.js"></script>
    </body>
</html>