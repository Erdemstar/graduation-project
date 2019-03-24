<?php
  include "Backend/Library/SQLInj_Function.php";
  $sqlinj  = new SQLInj();
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <title>SQL Injection</title>
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
            <?php $data1 = $sqlinj->level4($_GET["id"]); ?>
            <div class="table-responsive">
              <table class="table mb-0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Age</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $count = 1;
                  foreach ($data1 as $key => $value) {
                    $data =  explode(" " , $value);
                    echo "<tr>";
                      echo "<td>$count</td>";
                      echo "<td>$data[0]</td>";
                      echo "<td>$data[1]</td>";
                      echo "<td>$data[2]</td>";
                    echo "</tr>";
                    $count+=1;
                  }
                ?>
              </tbody>
            </table>


          </div> <!-- end content-->

        </div><!-- end content-page-->
        </div>
      </div>
    </div>
    <?php include "_footer.php"?>
  </body>
</html>
