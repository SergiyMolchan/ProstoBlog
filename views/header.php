<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">ProstoBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php 
          if($_COOKIE['Auth'] != ''):
        ?>
        <li class="nav-item active">
          <a class="nav-link" href="../article.php">Add article<span class="sr-only">(current)</span></a>
        </li>
        <?php
          endif;      
        ?>

      </ul>
      <?php 
        if($_COOKIE['Auth'] == ''):
      ?>
        <a class="btn btn-outline-success my-2 my-sm-0 mr-2" role="button" href="./SingIn.php">Sing in</a>
        <a class="btn btn-outline-success my-2 my-sm-0" role="button" href="./registration.php">Registration</a>
      <?php 
        else:
      ?>
        <a class="btn btn-outline-success my-2 my-sm-0" role="button" href="./SingIn.php">User account</a>
      <?php
        endif;      
      ?>
    </div>
  </nav>
