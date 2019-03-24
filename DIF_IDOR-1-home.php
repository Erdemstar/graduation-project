<?php
  include "Backend/Library/DifferentType_Function.php";
  $idor = new IDOR();
?>

<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <title>Hoşgeldiniz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php include "_menu.php"; ?>
    <div class="container-fluid">
      <div class="wrapper">
        <?php include "_left_bar.php";?>
        <div class="content-page">
          <div class="content">

            <?php

                 if (isset($_POST["id"])){
                   echo $idor->Get_Data($_POST["id"]);
                   //$data = explode(" ",$data);
                   echo "<h1>Burada idor çalışıyor fakat tasarım olarak daha bitmedi.Buraya kullanıcı profile yapılacaktır.DB üzerine kullanıcı bilgileri vardır ve kullanıcı fotoğrafı için yol kaydedildi.</h1>";
                 }

             ?>


          </div>
        </div>
      </div>
    </div>
      <?php include "_footer.php"?>
      </body>

</html>
