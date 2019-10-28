<?php 
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL));
    $password1 = trim(filter_var($_POST['Password'], FILTER_SANITIZE_STRING));
    $password2 = trim(filter_var($_POST['RepeatPassword'], FILTER_SANITIZE_STRING));
    if(strlen($username) <= 5)
        exit();
    if(strlen($email) <= 5)
        exit();
    if(strlen($password1) <= 5)
        exit();
    if(strlen($password2) <= 5)
        exit();

    if($password1 !== $password2){
        echo('pass1 != pass2');
        exit();
    } 
    else
    {
        $hash = '1qw2e33er45t';
        $password = md5($password1 . $hash);
    }

    $user = 'root';
    $pass = '';
    $db = 'prostoblog';
    $host = '127.0.0.1:3306';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $db;
    $pdo = new PDO($dsn, $user, $pass);

    $sql = 'INSERT INTO users(username, email, password) VALUES(?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $password]);
    echo("ok");
?>