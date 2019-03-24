<?php
  include "Backend/Library/DifferentType_Function.php";
  $sxxs = new SXXS;
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
  <!-- App cssYorumlar -->
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

          <form action="" method="post">
            <div class="form-group mb-3">
              <label for="example-textarea">Text area</label>
              <textarea class="form-control" name="comment" id="example-textarea" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom:4%">Submit</button>
          </form>

          <?php
            if ( isset($_POST["comment"]) ){
              $sxxs->insertData($_POST["comment"]);
            }
            $sxxs->getDataQeuery();
          ?>
      </div>
    </div>
  </div>
  </div>
  <?php include "_footer.php"?>

</body>

</html>
