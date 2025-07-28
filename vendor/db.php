<?php

$dsn  = 'mysql:host=MySQL-8.4;dbname=wallet;';
$user = 'root';
$pass = '';

try { $pdo = new PDO ($dsn, $user, $pass); }
catch (PDOException $exception) { echo $exception->getMessage (); }