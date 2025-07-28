<?php

include_once "../vendor/session.php";
include_once "../vendor/headers.php";
include_once "../vendor/db.php";

$fields = 'user_name, email, password, creation_date';
$values = ':user_name, :email, :password, :creation_date';
$answ   = $pdo->prepare ("INSERT INTO users ($fields) VALUES ($values)");

if (!empty ($_POST)):
    
    if ($_POST['pass'] != $_POST['pass_conf']) $_SESSION['message']['error'] = 'пароли не совпадают';
    else unset ($_SESSION['message']['error']);

    $answ->execute ([ 
        'creation_date' => date ('Y-m-d').'T'.date ('H:i:s'), 
        'user_name'     => $_POST['user_name'], 
        'password'      => $_POST['pass'], 
        'email'         => $_POST['email'], 
    ]);

    redirect ('/sign_in.php');
    
    // header("Location: /sign_in.php");
    // exit;

endif;