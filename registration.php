<!DOCTYPE html>
<html lang="en">
<?php
    $website_title = 'ProstoBlog registration';
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
                    <form id="registration" action="#">
                        <h2 class="text-white">Registration</h2>
                        <div class="form-group text-white">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                        </div>

                        <div class="form-group text-white">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group text-white">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
                        </div>

                        <div class="form-group text-white">
                            <label for="RepeatPassword">Repeat password</label>
                            <input type="password" class="form-control" id="RepeatPassword" name="RepeatPassword" placeholder="Repeat password">
                        </div>

                        <div id="formError" class="alert alert-danger" role="alert">
                            
                        </div>

                        <button type="submit" id="reg_btn" class="btn btn-primary">Registration</button>
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