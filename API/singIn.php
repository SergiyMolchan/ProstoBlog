<?php 
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $password = trim(filter_var($_POST['Password'], FILTER_SANITIZE_STRING));

    $error = '';

    if(strlen($username) <= 5)
        $error = 'Enter username more than 6 symbols. ';
    if(strlen($password) <= 5)
        $error = $error . 'Enter password more than 6 symbols. ';
    
    $hash = '1qw2e33er45t';
    $password = md5($password . $hash);
    
    if($error !== ''){
        echo($error);
        exit();
    }
    
    require_once('../MySql_connect.php');

    $sql = 'SELECT `id` FROM `users` WHERE `username` = :username && `password` = :password';
    $query = $pdo->prepare($sql);
    $query->execute(['username' => $username, 'password' => $password]);

    $user = $query->fetch(PDO::FETCH_OBJ);
    if($user->id == 0){
        echo('This user does not exist. ');
    }
    else{
        setcookie('Auth', $username, time() + 3600 * 24 * 30, '/');
        echo('Auth');
    }
?>