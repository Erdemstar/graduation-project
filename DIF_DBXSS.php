<?php
  include "Backend/Library/DifferentType_Function.php";
  $http = new HTTP();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8" />
  <title>DOM Based XSS</title>
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

              <script>
                function myFunction(){
                  var tmp = document.getElementById("simpleinput").value;
                  window.location.href =tmp;
                }
              </script>

              <label for="simpleinput">URL</label>
              <input type="text" id="simpleinput" class="form-control"  style="margin-bottom:1%">
              <button type="submit" class="btn btn-block btn-primary" id="button" onclick="myFunction()">Git</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php include "_footer.php"?>
</body>

</html>
