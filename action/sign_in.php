<?php

include_once "../vendor/session.php";
include_once "../vendor/headers.php";
include_once "../vendor/db.php";


$sql  = 'SELECT * FROM users WHERE password = :pass AND user_name = :name OR email = :name';
$answ = $pdo->prepare($sql);

if (!empty ($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'):

    $answ->execute (['pass' => $_POST['pass'], 'name' => $_POST['name']]);
    $data = $answ->fetch (PDO::FETCH_ASSOC);

    if (!empty ($data)):

        $_SESSION['user']['id']   = $data['id'];
        $_SESSION['user']['name'] = $data['user_name'];

    endif;

    redirect ('/');

else:

    echo '<pre>';
    print_r ($_SESSION);
    echo '<br>';

    print_r ($data);
    echo '</pre>';

endif;