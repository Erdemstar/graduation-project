<?php
  include "Backend/Library/DifferentType_Function.php";
  $http_rh = new HTTP_RH();
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

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">HTTP Header Bilgisi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?= $http_rh->getHeader();?></th>
                </tr>
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
    <?php include "_footer.php"?>
    </body>

</html>
