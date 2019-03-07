<?php

  include "../../../Backend/Library/DifferentType_Function.php";
  $redirect = new Redirect();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../../css/custom.css">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <title>Redirect</title>
</head>

<body>
  <?php include "../../../header.php"; ?>

  <div class="container" style="margin-top: 5%">

    <!-- Satır -->
    <div class="row">

      <!-- 1.parca -->
      <div class="col-md-3"></div>

      <!-- 2.parca -->
      <div class="col-md-6">

        <form action="<?php $_PHP_SELF ?>" method="GET">

          <h3>Web hacking konusunda faydalı linkler</h3>
          <ul>
            <li>
            <a href="Redirect.php?path=https://www.google.com">Google</a>
            </li>
            <li>
              <a href="Redirect.php?path=https://www.netsparker.com">Netsparker</a>
            </li>
            <li>
              <a href="Redirect.php?path=https://www.burpsuite.com">Burp suite</a>
            </li>
          </ul>

        </form>


        <div style="margin-top:3%;">

          <?php

            if (isset($_GET["path"])) {
              $redirect->forward($_GET["path"]);
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
  <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
