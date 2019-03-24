<?php
  include "Backend/Library/DifferentType_Function.php";
  $redirect = new Redirect();
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


                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <?php include "_footer.php"?>
    </body>
</html>
