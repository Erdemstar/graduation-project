<?php
  include "Backend/Library/DifferentType_Function.php";
  $idor2 = new IDOR2();
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
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="mb-3 header-title">Change Password</h4>

                    <form action="<?php $_PHP_SELF ?>" method="post">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword2">Password</label>
                        <input type="password" name="password2" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                      <input type="hidden" name="id" class="form-control" value="<?=$_SESSION["id"]?>" placeholder="Password">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <?php
                      if (isset($_POST["password1"]) && isset($_POST["password2"]) ){
                        if ($_POST["password1"] == $_POST["password2" ]){
                          $tmp = $idor2->chanePassword($_POST["id"],$_POST["password1"]);
                          echo $tmp;
                        }
                        else{
                          echo "Girdiğiniz password'ler uyuşmuyor.";
                        }
                      }
                     ?>


                  </div> <!-- end card-body-->
                </div> <!-- end card-->
              </div>
            </div>


          </div>
        </div>
      </div>
      <?php include "_footer.php"?>
      </body>

</html>
