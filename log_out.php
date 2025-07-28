<?php

include_once "./vendor/session.php";

unset ($_SESSION['user']);

if (isset ($_SESSION['user']) ):
    echo $_SESSION['user'];
endif;

header ("Location: /sign_in.php");
exit;