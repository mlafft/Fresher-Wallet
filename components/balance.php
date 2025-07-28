<?php require_once __DIR__ . "/../vendor/balance.php"; ?>

<div class="balance">
    <div class="row r-line"></div>

    <div class="row r-main limiter">
        <div class="c-main expenses">

            <div class="expense-title">Расход</div>
            <div class="expense-amount">
                <span class="expense-style"><?=$expenses?>
            </span></div>

        </div>

        <div class="column c-line"></div>
        
        <div class="c-main income">
            <div class="income-title">Доход</div>
            <div class="income-amount">+<?=$income?></div>
        </div>

        <div class="column c-line"></div>

        <div class="c-main remains">

            <div class="remains-title">Остаток</div>
            <div class="remain-amount"><?=$sign.$result?></div>
            
        </div>
    </div>

    <div class="row r-line"></div>
</div>