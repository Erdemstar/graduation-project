<?php
  include ("Backend/Library/General_Function.php");
  $general = new General;
  $general->startSes();
  $general->isLogined();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="Frontend/css/custom.css">
  <link rel="stylesheet" href="Frontend/css/bootstrap.min.css">
  <title>Login</title>
</head>
<body>

  <div class="container" style="margin-top:7%">
  <form class="form-signin" method="post" action="<?php $_PHP_SELF ?>">
    <h1 class="h3 mb-3 font-weight-normal" style="text-aling:center;">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword"  class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  </form>

  <?php

      if (isset($_POST["username"]) && isset($_POST["password"]) ){
        $general->Login($_POST["username"],$_POST["password"]);
      }

   ?>

</div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
