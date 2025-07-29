<?php

include_once "vendor/session.php";

$values = ':user_id, :amount, :sign, :category, :method, :comment, :date';
$fields = 'user_id, amount, sign, category, method, comment, date';
$sql = "INSERT INTO transactions ($fields) VALUES ($values)";

$date = date ('Y-m-d');

if (isset ($_POST['amount'])) $profile = $_POST['date'];

if (isset ($_POST['amount']) AND $_POST['amount'][0] == '+') $sign = '+';
elseif (isset ($_POST['amount']) AND $_POST['amount'][0] == '-') $sign = '-';
else $sign = '+';

$answ = $pdo->prepare ($sql);
if (!empty ($_POST) && $_SERVER['REQUEST_METHOD']):
    $answ->execute ([ 
        'user_id'  => $_SESSION['user']['id'], 
        'amount'   => (int)$_POST['amount'], 
        'sign'     => $sign, 
        'category' => $_POST['category'], 
        'method'   => $_POST['method'], 
        'comment'  => $_POST['comment'],
        'date'     => $_POST['date']
    ]);

    header("Location: /index.php");
    exit;

endif;