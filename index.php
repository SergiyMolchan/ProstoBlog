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
                <div class="col-md-8">asd</div>

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