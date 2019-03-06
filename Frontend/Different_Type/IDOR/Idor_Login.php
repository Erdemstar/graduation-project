<?php
  include "../../../Backend/Library/DifferentType_Function.php";
  $idor = new IDOR();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>IDOR Login</title>
</head>
<body>

  <?php include "../../../header.php"; ?>

    <div class="container" style="margin-top: 5%">

        <!-- Satır -->
        <div class="row">

            <!-- 1.parca -->
            <div class="col-md-3"></div>

            <!-- 2.parca -->
            <div class="col-md-6">

              <form class="form-signin" action="<?php $_PHP_SELF ?>" method="post">
                 <h2 class="form-signin-heading">Giriş Yap</h2>
                 <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                 <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                 <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş</button>
               </form>

               <?php

                 if (isset($_POST["username"]) || isset($_POST["password"]) ){

                  $id = $idor->Login($_POST["username"],$_POST["password"]);
                ?>
                  <form id="myForm" action="./Idor_Home.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                  </form>
                  <script type="text/javascript">
                      document.getElementById("myForm").submit()
                  </script>

                <?php } ?>


            </div>

            <!-- 3.parca -->
            <div class="col-md-3"></div>

         </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>
</html>
