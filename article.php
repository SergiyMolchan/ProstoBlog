<?php 
    if($_COOKIE['Auth'] == ''){
        header('Location: /registration.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php
    $website_title = 'ProstoBlog New article';
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

                    <form action="#">
                        <h2 class="text-white">New article</h2>
                        <div class="form-group text-white">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" id="Title" name="Title" aria-describedby="emailHelp" placeholder="Title">
                        </div>


                        <div class="form-group text-white">
                            <label for="Intro">Intro</label>
                            <textarea class="form-control" id="Intro" rows="3" placeholder="Intro"></textarea>
                        </div>

                        <div class="form-group text-white">
                            <label for="Text">Text</label>
                            <textarea class="form-control" id="Text" rows="3" placeholder="Text"></textarea>
                        </div>

                        <div id="formError" class="alert alert-danger" role="alert"></div>

                        <button type="submit" class="btn btn-primary" id="AddArticle">Add article</button>
                    </form>
       
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