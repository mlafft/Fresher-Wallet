<?php

$sql  = 'SELECT * FROM transactions';
$data = $pdo->query($sql)->fetchAll (PDO::FETCH_ASSOC);

$income   = 0; 
$expenses = 0;

for ($i = count ($data)-1; $i >= 0; $i--):

    if ($data[$i]['user_id'] != $_SESSION['user']['id']) continue;

    if ($data[$i]['sign'] == '+') $income   += $data[$i]['amount'];
    if ($data[$i]['sign'] == '-') $expenses += $data[$i]['amount'];
    
endfor; 

$result = $income + $expenses;

if ($result > 0) $sign = '+';
else             $sign = null;