<?php
  include "Backend/Library/DifferentType_Function.php";
  //$xxe = new XXE();
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
        </div>
      </div>
    </div>
      <?php include "_footer.php"?>
      </body>

</html>
