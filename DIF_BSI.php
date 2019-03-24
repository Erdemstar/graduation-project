<?php
  include "Backend/Library/DifferentType_Function.php";
  $bsi = new BSI();
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <title>Blind SQL Injection</title>
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

                    <form action="<?php $_PHP_SELF ?>" method="post">
                      <div class="form-group mb-3">
                        <label for="simpleinput">Text</label>
                        <input type="text" id="id" name="id" class="form-control" placeholder="ID Değeri giriniz">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <?php if ( isset($_POST["id"]) ){?>
                     <!-- Yukarıda bir if bloğu açıldı eğer id post ise bir aşağıdakiler görüntülensin-->
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
                          $data = $bsi->getUser($_POST["id"]);
                          foreach ($data as $key => $value) {
                            $dataa =  explode(" " , $value);
                            echo "<tr>";
                              echo "<td>$dataa[0]</td>";
                              echo "<td>$dataa[1]</td>";
                              echo "<td>$dataa[2]</td>";
                            echo "</tr>";
                          }
                        ?>
                      </tbody>
                    </table>
                     <!-- Aşağıdaki PHP tag'inde ise açılan if bloğu kapatılmıştır.-->
                    <?php } ?>


                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <?php include "_footer.php"?>
    </body>
</html>
