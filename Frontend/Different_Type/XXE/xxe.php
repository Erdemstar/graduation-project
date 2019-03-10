<?php
  include "../../../Backend/Library/DifferentType_Function.php";
  $xxe = new XXE();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>HTTP GET Login</title>
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

              <form class="form-signin" action="<?php $_PHP_SELF ?>" method="post" enctype="text/plain">
                  <h4>XXE için bu sayfa içersindeki php kodları çalışıyor fakat tam istediğimi almadım.
                    <a href="https://depthsecurity.com/blog/exploitation-xml-external-entity-xxe-injection">Referans</a>
                    incelenek ve daha sonra bakılacaktır.
                  </h4>
                 <h2 class="form-signin-heading">Giriş Yap</h2>
                 <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş</button>
               </form>


               <?php
               if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                   libxml_disable_entity_loader (false);
                   $xmlfile = file_get_contents('php://input');
                   $dom = new DOMDocument();
                   $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
                   $creds = simplexml_import_dom($dom);
                   $user = $creds->user;
                   $pass = $creds->pass;
                   echo "You have logged in as user $user";

                  }
                ?>


            </div>

            <!-- 3.parca -->
            <div class="col-md-3"></div>

         </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>
</html>
