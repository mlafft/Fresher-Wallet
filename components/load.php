<?php

require_once __DIR__ . "/../vendor/load.php";

$prev = [0, 0, 0];

for ($i = count ($data)-1; $i >= 0; $i--): 
    $next = explode ('-', $data[$n_order[$i]]['date']);

    if ($prev[0] != $next[0] OR $prev[1] != $next[1] OR $prev[2] != $next[2]):

        $day = (!($next[2] >= 10)) ? $next[2][1] : $next[2];

?>

<div class="check-row" style="margin-bottom: 60px;"></div>

<div class="limiter date">
    <?=$next[0].' '.date_time ($data[$n_order[$i]]['date']).' '.$day.'ое'?>
</div>
    
<?php endif; $prev = $next ?>

<div class="check-row"></div>

<div class="limiter row-1">

    <div class="category">
        <?=$data[$n_order[$i]]['category']?>
    </div>

    <?php if ($data[$n_order[$i]]['amount'] < 0): ?> 

        <div class="check-amount" style="color: #E33A3A;">
            <?=$data[$n_order[$i]]['amount']?>
        </div>

    <?php else: ?> 

        <div class="check-amount">
            +<?=$data[$n_order[$i]]['amount']?>
        </div>

    <?php endif ?>
    
</div>

<div class="limiter row-2">

    <div class="comment">
        <?=$data[$n_order[$i]]['comment']?>
    </div>

    <div class="card">
        <?=$data[$n_order[$i]]['method']?>
    </div>

</div>

<?php 

endfor;


function date_time (string $data)
{
    $date = explode ('-', $data);

    switch ($date[1])
    {
        case '1':
            return 'январь';
        case '2':
            return 'февраль';
        case '3':
            return 'март';
        case '4':
            return 'апрель';
        case '5':
            return 'май';
        case '6':
            return 'июнь';
        case '7':
            return 'июль';
        case '8':
            return 'август';
        case '9':
            return 'сентябрь';
        case '10':
            return 'октябрь';
        case '11':
            return 'ноябрь';
        case '12':
            return 'декабрь';
    }
}