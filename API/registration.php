<?php 
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL));
    $password1 = trim(filter_var($_POST['Password'], FILTER_SANITIZE_STRING));
    $password2 = trim(filter_var($_POST['RepeatPassword'], FILTER_SANITIZE_STRING));

    $error = '';

    if(strlen($username) <= 5)
        $error = 'Enter username more than 6 symbols. ';
    if(strlen($email) <= 5)
        $error = $error . 'Enter email. ';  
    if(strlen($password1) <= 5)
        $error = $error . 'Enter password more than 6 symbols. ';
    if(strlen($password2) <= 5)
        $error = $error . 'Repeat password. ';
    
    if($password1 !== $password2){
        $error = $error . 'Passwords do not match. ';

    } 
    else
    {
        $hash = '1qw2e33er45t';
        $password = md5($password1 . $hash);
        
    }
    if($error !== ''){
        echo($error);
        exit();
    }

    require_once('../MySql_connect.php');

    $sql = 'INSERT INTO users(username, email, password) VALUES(?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $password]);
    echo('Registered');
?>