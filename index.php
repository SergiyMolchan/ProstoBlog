<!DOCTYPE html>
<html lang="en">
<?php
    $website_title = 'ProstoBlog';
    include('./views/head.php');
?>
<body class="text-center body">
    <?php
        include_once('./views/header.php');
    ?>

    <main>
        <div class="conteiner">
            <div class="row">
                <div class="col-md-7 offset-md-1 col-10 offset-1">
                
                <?php 
                    require_once('./MySql_connect.php');

                    $sql = 'SELECT * FROM `articles` ORDER BY `date` DESC';
                    $query = $pdo->query($sql);
                    while($row = $query->fetch(PDO::FETCH_OBJ)){
                        echo '
                        <div class="card-body  text-white mb-4">
                            <h5 class="card-title">' . $row->Title . '</h5>
                            <p class="card-text">'. $row->Intro .'</p>
                            <footer class="blockquote-footer text-info">The author of the article <cite title="Source Title">'. $row->Author .'</cite></footer>
                            <a href="#" class="btn mt-2 btn-primary">Read</a>
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