<?php

include_once __DIR__ . "/../vendor/session.php";
include_once __DIR__ . '/../vendor/db.php';

// echo '<pre>';
// print_r ($_GET);
// echo '</pre>';

$sql  = 'SELECT * FROM users WHERE password = :pass AND user_name = :name OR email = :name';
$answ = $pdo->prepare($sql);

if (!empty ($_GET)):

    $answ->execute (['pass' => $_GET['pass'], 'name' => $_GET['name']]);
    $data = $answ->fetch (PDO::FETCH_ASSOC);

    if (!empty ($data)):

        $_SESSION['user']['id']   = $data['id'];
        $_SESSION['user']['name'] = $data['user_name'];
        
    endif;
else:

    // echo '<pre>';
    // print_r ($_SESSION);
    // echo '</pre>';

endif;

$sql  = 'SELECT * FROM transactions WHERE user_id = '.$_SESSION['user']['id'];
$data = $pdo->query($sql)->fetchAll (PDO::FETCH_ASSOC);

for ($t = 0; $t < count ($data); $t++):

    $time      = explode ('-', $data[$t]['date']);
    $t_order[] = (int)($time[0].$time[1].$time[2]);

endfor;

if ($data):

    asort ($t_order);
    foreach ($t_order as $key => $value) $n_order[] = $key;

endif;

// print_r ($data);
print (json_encode ($data));
