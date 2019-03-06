<?php
  include "../../Backend/Library/SQLInj_Function.php";
  include "../../Backend/Library/General_Function.php";
  $sqlinj  = new SQLInj();
  $general = new General();
  //$general->getErr();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../../Frontend/css/custom.css">
  <link rel="stylesheet" href="../../Frontend/css/bootstrap.min.css">
  <title>SQL Injection Seviye 1</title>
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

        <?php $data1 = $sqlinj->level1($_GET["name"]); ?>

        <table class="table">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Age</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($data1 as $key => $value) {
                $data =  explode(" " , $value);
                echo "<tr>";
                  echo "<td>$data[0]</td>";
                  echo "<td>$data[1]</td>";
                  echo "<td>$data[2]</td>";
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
      <!-- 3.parca -->
      <div class="col-md-3"></div>

    </div>


  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="../../Frontend/js/bootstrap.min.js"></script>

</body>

</html>
