<?php
  include "../../../Backend/Library/DifferentType_Function.php";
  $js = new JS_Bypass();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Javascript Bypass</title>
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

              <form class="form-signin" action="<?php $_PHP_SELF ?>" method="get">
                 <h2 class="form-signin-heading"></h2>
                 <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Adınız" required pattern="[A-Za-z]*" title="Sadece harf giriniz !!!">
                 <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Soyadınız" required pattern="[A-Za-z]*" title="Sadece harf giriniz !!!">
                 <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="Check()">Giriş</button>
               </form>

               <?php

                 if (isset($_GET["firstname"]) || isset($_GET["lastname"]) ){

                  echo "<span style='font-weight:bolder;font-size:20px'>". $js->Take($_GET["firstname"],$_GET["lastname"]) ."</span>";

                 }

                ?>


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
