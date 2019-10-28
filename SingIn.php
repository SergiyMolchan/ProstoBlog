<!DOCTYPE html>
<html lang="en">
<?php
    $website_title = 'ProstoBlog sing in';
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
                    <form id="registration">

                        <div class="form-group text-white">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="form-group text-white">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Sing In</button>
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