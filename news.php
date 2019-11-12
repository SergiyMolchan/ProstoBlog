<!DOCTYPE html>
<html lang="en">
<?php
    require_once('./MySql_connect.php');

    $sql = 'SELECT * FROM `articles` WHERE `id` = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $_GET['id']]);

    $article = $query->fetch(PDO::FETCH_OBJ);

    $website_title = $article->Title;   
    include('./views/head.php');
?>
<body class="text-center body">
    <?php
        include_once('./views/header.php');
    ?>

    <main>
        <div class="conteiner">
            <div class="row">
                <div class="col-md-7 offset-md-1 col-10 offset-1 text-white">
                    <div class="jumbotron bg-secondary">
                        <h1 class="text-center mb-5 text-primary"><?=$article->Title?></h1>
                        <p class="mb-3 text-dark text-left"><?=$article->Intro?></p>
                        <p class="mb-5 text-dark text-left"><?=$article->Text?></p>
                        <footer class="blockquote-footer text-center text-info mb-2">The author of the article <cite title="Source Title"><?=$article->Author?></cite></footer>
                        <p class="text-center text-info">Publication date <?=date('d.m.Y H:i',$article->Date - 3600)?></p>
                    </div>

                    <form class="mb-5" action="./news.php?id=<?=$_GET['id']?>" method="POST">
                        <h2 class="text-white">New comment</h2>
                        <div class="form-group text-white">
                            <label for="name">Your name</label>
                            <input value="<?=$_COOKIE['Auth']?>" type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Your name">
                        </div>

                        <div class="form-group text-white">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Comment"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" id="AddComment">Add comment</button>
                    </form>

                    <?php 
                        if($_POST['name'] != '' && $_POST['comment'] != ''){
                            $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
                            $comment = trim($_POST['comment']);

                            $sql = 'INSERT INTO comments(name, comment, article_id) VALUES(?, ?, ?)';
                            $query = $pdo->prepare($sql);
                            $query->execute([$name, $comment, $_GET['id']]);
                        }

                        $sql = 'SELECT * FROM `comments` WHERE `article_id` = :id ORDER BY `id` DESC';
                        $query = $pdo->prepare($sql);
                        $query->execute(['id' => $_GET['id']]);
                        $comments = $query->fetchAll(PDO::FETCH_OBJ);

                        foreach($comments as $comment){
                            echo '                           
                            <div class="card text-center bg-transparent mt-2 mb-2">
                                <div class="card-header">
                                    '. $comment->name .'
                                </div>
                                <div class="card-body">
                                    <p class="card-text">'. $comment->comment .'</p>
                                </div>
                            </div>
                            ';
                        }
                    ?>


                </div>
                <?php 
                    include_once('./views/aside.php');
                ?>
            </div>
        </div>
    </main>

    <?php
        include_once('./views/footer.php');
    ?>    
    <script src="./js/JQuery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
</body>
</html>