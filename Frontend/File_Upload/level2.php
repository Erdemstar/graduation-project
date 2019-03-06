<?php
  include "../../Backend/Library/File_Upload_Function.php";
  include "../../Backend/Library/General_Function.php";
  $general = new General();
  $file_up = new FileUpload();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>File Upload seviye 2</title>
</head>
<body>

    <?php include "../../header.php"; ?>


    <div class="container" style="margin-top: 5%">

        <!-- Satır -->
        <div class="row">

            <!-- 1.parca -->
            <div class="col-md-3"></div>

            <!-- 2.parca -->
            <div class="col-md-6">

              <form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">
                <h1>Fotoğraf yükleme alanı</h1>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
              </form>

              <?php
                if (isset($_POST["submit"])){
                  $file_up->level2();
                }
              ?>
            </div>

            </div>

            <!-- 3.parca -->
            <div class="col-md-3"></div>

         </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>
