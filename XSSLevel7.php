<?php
  include "Backend/Library/XSS_Function.php";
  $xss = new XSS();
?>

<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <title>Cross Site Scripting</title>
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

            <form action="<?php $_PHP_SELF ?>" method="GET">
              <div class="form-group">
                <label for="exampleInputEmail1" style="font-weight:bolder">Name</label>
                <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Please enter yourname">
              </div>
            <button type="button" class="btn btn-block btn-primary">Gönder</button>
            </form>
            <?php
              if (isset($_GET["name"])) {
                echo "<span style='font-weight:bolder;font-size:25px'>Hoşgeldin </span>" . $xss->level7($_GET['name']);
              }
            ?>
          </div> <!-- end content-->

        </div><!-- end content-page-->
        </div>
      </div>
      <?php include "_footer.php"?>
      </body>

</html>
