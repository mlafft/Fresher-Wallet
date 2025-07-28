<?php

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

// echo '<pre>';
// print_r ($data);
// echo '<br>';

// print_r ($n_order);
// echo '</pre>';