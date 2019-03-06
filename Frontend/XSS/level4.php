<?php

  include "../../Backend/Library/XSS_Function.php";
  $xss = new XSS();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>Cross Site Scripting seviye 4</title>
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

        <form action="<?php $_PHP_SELF ?>" method="GET">

          <div class="form-group">
            <label for="exampleInputEmail1" style="font-weight:bolder">Name</label>
            <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Please enter yourname">
          </div>

          <button type="submit" class="btn" style="margin-left:38%;">Gönder</button>
        </form>


        <div style="margin-top:3%;">

          <?php

            if (isset($_GET["name"])) {

              echo "<span style='font-weight:bolder;font-size:25px'>Hoşgeldin </span>" . $xss->level4($_GET['name']);

            }

          ?>

        </div>



      </div>

      <!-- 3.parca -->
      <div class="col-md-3"></div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>

</html>
