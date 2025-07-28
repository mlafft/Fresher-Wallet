<?php require_once __DIR__ . "/../action/send.php"; ?>

<form action="" method="POST" class="balance-check hidden">
    <input type="text" placeholder="+ 1 000Р" value="+500" name="amount" required>

    <label for="category">Категория</label>
    <input type="text" id="category" value="Приятная находка" name="category" required>
    
    <label for="method">Способ</label>
    <input type="text" id="method" value="Наличные" name="method" required> 
    
    <label for="comment">Примечание</label>
    <input type="text" class="comment" id="comment" value="Кто ищет тот найдёт" name="comment">
    
    <label for="date">Время</label>
    <input type="date" class="date" id="date" value="<?=$date?>" name="date" required>

    <input class="button" type="submit">
</form>