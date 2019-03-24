<?php
  include "Backend/Library/DifferentType_Function.php";
  $js = new JS_Bypass();
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



            <form action="<?php $_PHP_SELF ?>" method="get">
              <div class="form-group">
                <label for="exampleInputEmail1">Firstname</label>
                <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" placeholder="Username" required pattern="[A-Za-z]*" title="Sadece harf giriniz !!!">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Lastname</label>
                <input type="text" class="form-control" name="lastname" id="exampleInputPassword1" placeholder="Password" required pattern="[A-Za-z]*" title="Sadece harf giriniz !!!">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <?php
                 if (isset($_GET["firstname"]) || isset($_GET["lastname"]) ){
                  echo "<span style='font-weight:bolder;font-size:20px'>". $js->Take($_GET["firstname"],$_GET["lastname"]) ."</span>";
                 }

                ?>





          </div>
        </div>
      </div>
    </div>
      <?php include "_footer.php"?>
      </body>

</html>
