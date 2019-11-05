<?php
    $user = 'root';
    $pass = '';
    $db = 'prostoblog';
    $host = '127.0.0.1:3306';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $db;
    $pdo = new PDO($dsn, $user, $pass);
?>