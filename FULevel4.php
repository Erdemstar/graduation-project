<?php
  include "Backend/Library/File_Upload_Function.php";
  $file_up = new FileUpload();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8" />
  <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
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
              <div class="card">
                <div class="card-body">

                  <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group mb-0">
                      <label>Custom file input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="fileToUpload" id="inputGroupFile04">
                          <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                      </div>
                      <button style="margin-top:2%;width:100%"  type="submit" value="Upload Image" name="submit" class="btn btn-primary" style="width:100%">Submit</button>
                    </div>

                  </form>
                  <?php
                      if (isset($_POST["submit"])){
                        $file_up->level4();
                      }
                    ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <?php include "_footer.php"?>
</body>

</html>
