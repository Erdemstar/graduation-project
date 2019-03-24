<?php
  include "Backend/Library/DifferentType_Function.php";
  $http = new HTTP();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8" />
  <title>HTTP GET Bruteforce</title>
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
                  <h4 class="mb-3 header-title">HTTP Login</h4>

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
                   if (isset($_POST["username"]) && isset($_POST["password"]) ){
                    echo "<span style='font-weight:bolder;font-size:20px'>". $http->HTTP_Post_Login($_POST["username"],$_POST["password"]) ."</span>";
                   }
                  ?>


                </div> <!-- end card-body-->
              </div> <!-- end card-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php include "_footer.php"?>
</body>

</html>
