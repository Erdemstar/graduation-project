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


            <form action="<?php $_PHP_SELF ?>" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <?php
              if (isset($_POST["username"]) || isset($_POST["password"]) ){
               $id = $idor->Login($_POST["username"],$_POST["password"]);
             ?>
               <form id="myForm" action="DIF_IDOR-1-home.php" method="post">
                 <input type="hidden" name="id" value="<?php echo $id;?>">
               </form>
               <script type="text/javascript">
                   document.getElementById("myForm").submit()
               </script>

             <?php } ?>


          </div>
        </div>
      </div>
    </div>
      <?php include "_footer.php"?>
      </body>

</html>
