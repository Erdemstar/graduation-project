<?php
  include "Backend/Library/DifferentType_Function.php";
  $ssrf = new SSRF();
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

          <div class="row">
            <div class="col-lg-12">

              <form action="<?php $_PHP_SELF ?>" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="font-weight:bolder">İndirmek istediğiniz resmin yolunu giriniz.</label>
                  <input type="name" class="form-control" id="image" name="image" aria-describedby="emailHelp" placeholder="URL">
                </div>
              <button type="submit" class="btn btn-block btn-primary" style="margin-bottom:5%">Gönder</button>
              </form>
               <?php

                 if (isset($_POST["image"]) and !empty($_POST["image"])){
                  $image_name = $ssrf->get_Image($_POST["image"]);
                  echo "<img src='$image_name' class='img-fluid' alt=''>";
                }
                ?>


            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
    <?php include "_footer.php"?>
</body>

</html>
