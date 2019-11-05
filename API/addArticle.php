<?php  
    $Title = trim(filter_var($_POST['Title'], FILTER_SANITIZE_STRING));
    $Intro = trim(filter_var($_POST['Intro'], FILTER_SANITIZE_STRING));
    $Text = trim(filter_var($_POST['Text'], FILTER_SANITIZE_STRING));

    $error = '';

    if(strlen($Title) <= 5)
        $error = 'Enter title more than 6 symbols. '; 
    if(strlen($Intro) <= 15)
        $error = $error . 'Enter intro more than 6 symbols. ';
    if(strlen($Text) <= 30)
        $error = $error . 'Enter text. ';

    if($error !== ''){
        echo($error);
        exit();
    }

    require_once('../MySql_connect.php');

    $sql = 'INSERT INTO articles(Title, Intro, Text, Date, Author) VALUES(?, ?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$Title, $Intro, $Text, time(), $_COOKIE['Auth']]);
    echo('articleAdded');
?>