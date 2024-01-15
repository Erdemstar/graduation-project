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
                    $data = $idor->Get_Data($_POST["id"]);
                    $data = explode(" ",$data);
                  }
             ?>

          <div class="row">
            <div class="col-sm-6">
              <!-- Profile -->
              <div class="card bg-primary">
                <div class="card-body profile-user-box">

                  <div class="row">
                    <div class="col-sm-8">
                      <div class="media">
                        <span class="float-left m-2 mr-4"><img src="include/pictures/<?=$data[6]?>" style="height: 100px;" alt="" class="rounded-circle img-thumbnail"></span>
                        <div class="media-body">

                          <h4 class="mt-1 mb-1 text-white" style="margin-top:16% !important"><?php echo $data[0] ." ". $data[1]; ?></h4>
                          <h4 class="font-13 text-white-50"><?php echo $data[2] ." / ". $data[3] ."-". $data[5]; ?></h4>

                        </div> <!-- end media-body-->
                      </div>
                    </div> <!-- end col-->

                </div> <!-- end card-body/ profile-user-box-->
              </div>
              <!--end profile/ card -->
            </div> <!-- end col-->
          </div>
          <!-- end row -->

        </div>
      </div>
    </div>
  </div>
  <?php include "_footer.php"?>
</body>

</html>
