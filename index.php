<?php
  include ("Backend/Library/General_Function.php");
  $general = new General;
  $general->getErr();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Frontend/css/custom.css">
    <link rel="stylesheet" href="Frontend/css/bootstrap.min.css">
    <title>Graduation Project</title>
</head>
<body>
     <!-- Giriş 1 -->
    <div class="container" style="margin-top: 5%">
        <div class="jumbotron">
          <h1 class="display-4">Hoşgeldiniz</h1>
          <p class="lead">
              Bu uygulama Web Uygulaması geliştiren kişilere yazılımsal hataların nelere sebeb olacağını göstermek ve aynı zamanda Web açıkları
              arayan kişilere üzerinde uygulama yapabilecekleri bir ortam sağlamaktadır
          </p>
          <hr class="my-4">
          <p>Kullandığın tarayıcı <?=$general->getBrowser($_SERVER['HTTP_USER_AGENT']); ?> , kullandığın işletim sistemi ise <?=$general->getOS($_SERVER['HTTP_USER_AGENT']); ?></p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>

     <!-- Saldırı kısmı 1 -->
    <div class="container" style="margin-top: 5%">
        <div class="card-deck mb-3 text-center">

            <!-- Saldırı kısmı 1.1 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="Frontend/XSS/level0.php" style="color: black">Cross Site Scripting</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="Frontend/XSS/level1.php">Seviye 1</a></h5></li>
                        <li><h5><a href="Frontend/XSS/level2.php">Seviye 2</a></h5></li>
                        <li><h5><a href="Frontend/XSS/level3.php">Seviye 3</a></h5></li>
                        <li><h5><a href="Frontend/XSS/level4.php">Seviye 4</a></h5></li>
                        <li><h5><a href="Frontend/XSS/level5.php">Seviye 5</a></h5></li>
                        <li><h5><a href="Frontend/XSS/level6.php">Seviye 6</a></h5></li>
                        <li><h5><a href="Frontend/XSS/level7.php">Seviye 7</a></h5></li>
                    </ul>
                  </div>
            </div>
            <!-- Saldırı kısmı 1.2 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="Frontend/SQL_Injection/level0.php" style="color: black">SQL Injection</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="Frontend/SQL_Injection/level1.php?name=James">Seviye 1</a></h5></li>
                        <li><h5><a href="Frontend/SQL_Injection/level2.php?name=James">Seviye 2</a></h5></li>
                        <li><h5><a href="Frontend/SQL_Injection/level3.php?name=James">Seviye 3</a></h5></li>
                        <li><h5><a href="Frontend/SQL_Injection/level4.php?id=1">Seviye 4</a></h5></li>
                        <li><h5><a href="Frontend/SQL_Injection/level5.php?id=1">Seviye 5</a></h5></li>
                    </ul>
                  </div>
            </div>
            <!-- Saldırı kısmı 1.3 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="Frontend/File_Upload/level0.php" style="color: black">File Upload</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="Frontend/File_Upload/level1.php">Seviye 1</a></h5></li>
                        <li><h5><a href="Frontend/File_Upload/level2.php">Seviye 2</a></h5></li>
                        <li><h5><a href="Frontend/File_Upload/level3.php">Seviye 3</a></h5></li>
                        <li><h5><a href="Frontend/File_Upload/level4.php">Seviye 4</a></h5></li>

                    </ul>
                  </div>
            </div>
            <!-- Saldırı kısmı 1.4 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="Frontend/File_Include/level0.php" style="color: black">File Include</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="Frontend/File_Include/level1.php?page=include/html/statistics.html">Seviye 1</a></h5></li>
                        <li><h5><a href="Frontend/File_Include/level2.php?page=text.php">Seviye 2</a></h5></li>
                        <li><h5><a href="Frontend/File_Include/level3.php?page=include/html/statistics.html">Seviye 3</a></h5></li>

                    </ul>
                  </div>
            </div>

        </div>
    </div>

     <!-- Saldırı kısmı 2 -->
    <div class="container" style="margin-top: 5%">
        <div class="card-deck mb-3 text-center">

            <!-- Saldırı kısmı 2.1 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="Frontend/Code_Injection/level0.php" style="color: black">Code Injection</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="Frontend/Code_Injection/level1.php">Seviye 1</a></h5></li>
                        <li><h5><a href="Frontend/Code_Injection/level2.php">Seviye 2</a></h5></li>
                        <li><h5><a href="Frontend/Code_Injection/level3.php">Seviye 3</a></h5></li>
                        <li><h5><a href="Frontend/Code_Injection/level4.php">Seviye 4</a></h5></li>
                        <li><h5><a href="Frontend/Code_Injection/level5.php">Seviye 5</a></h5></li>
                        <li><h5><a href="#">Seviye 6</a></h5></li>
                        <li><h5><a href="#">Seviye 7</a></h5></li>
                        <li><h5><a href="#">Seviye 8</a></h5></li>
                        <li><h5><a href="#">Seviye 9</a></h5></li>
                    </ul>
                  </div>
            </div>

            <!-- Saldırı kısmı 2.2 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="Frontend/Command_Injection/level0.php" style="color: black">Command Injection</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="Frontend/Command_Injection/level1.php">Seviye 1</a></h5></li>
                        <li><h5><a href="Frontend/Command_Injection/level2.php">Seviye 2</a></h5></li>
                        <li><h5><a href="Frontend/Command_Injection/level3.php">Seviye 3</a></h5></li>
                        <li><h5><a href="Frontend/Command_Injection/level4.php">Seviye 4</a></h5></li>

                    </ul>
                  </div>
            </div>

            <!-- Saldırı kısmı 2.3 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="Frontend/HTML_Injection/level0.php" style="color: black">HTML Injection</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="Frontend/HTML_Injection/level1.php">Seviye 1</a></h5></li>
                        <li><h5><a href="Frontend/HTML_Injection/level2.php">Seviye 2</a></h5></li>
                        <li><h5><a href="Frontend/HTML_Injection/level3.php">Seviye 3</a></h5></li>
                        <li><h5><a href="Frontend/HTML_Injection/level4.php">Seviye 4</a></h5></li>
                        <li><h5><a href="Frontend/HTML_Injection/level5.php">Seviye 5</a></h5></li>
                        <li><h5><a href="Frontend/HTML_Injection/level6.php">Seviye 6</a></h5></li>
                        <li><h5><a href="Frontend/HTML_Injection/level7.php">Seviye 7</a></h5></li>
                    </ul>
                  </div>
            </div>

        


        </div>
    </div>

    <div class="container" style="margin-top: 5%">
        <div class="card-deck mb-3 text-center">

            <!-- Saldırı kısmı 2.1 -->
            <div class="card mb-3" style="display:none"></div>

            <!-- Saldırı kısmı 2.2 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="Frontend/Code_Injection/level0.php" style="color: black">Code Injection</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                      <li><h5><a href="Frontend/Code_Injection/level5.php">Insecure Direct Object Reference(XVWA)</a></h5></li>
                      <li><h5><a href="Frontend/Code_Injection/level3.php">Server Side Template Injection(XVWA)</a></h5></li>
                      <li><h5><a href="Frontend/Code_Injection/level2.php">Cross Site Request Forget..</a></h5></li>
                      <li><h5><a href="Frontend/Code_Injection/level4.php">XEE</a></h5></li>
                      <li><h5><a href="Frontend/Code_Injection/level4.php">XPATH Injection(XVWA)</a></h5></li>
                        <li><h5><a href="Frontend/Different_Type/Http_Get_Login.php">HTTP Login (GET)</a></h5></li>
                        <li><h5><a href="Frontend/Different_Type/Http_POST_Login.php">HTTP Login (POST)</a></h5></li>
                        <li><h5><a href="#">Seviye 6</a></h5></li>
                        <li><h5><a href="#">Seviye 7</a></h5></li>
                        <li><h5><a href="#">Seviye 8</a></h5></li>
                        <li><h5><a href="#">Seviye 9</a></h5></li>
                    </ul>
                  </div>
            </div>

            <!-- Saldırı kısmı 2.3 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="Frontend/Code_Injection/level0.php" style="color: black">Code Injection</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="Frontend/Code_Injection/level1.php">Unvalidated Redirect & Forwards(XVWA)</a></h5></li>
                        <li><h5><a href="Frontend/Code_Injection/level4.php">Server-Side Includes (SSI) Injection</a></h5></li>
                        <li><h5><a href="Frontend/Code_Injection/level2.php">JavaScript Validation Bypass(OWASP)</a></h5></li>
                        <li><h5><a href="Frontend/Code_Injection/level3.php">Directory Travelsal</a></h5></li>
                        <li><h5><a href="Frontend/Code_Injection/level5.php">Seviye 5</a></h5></li>
                        <li><h5><a href="#">Seviye 6</a></h5></li>
                        <li><h5><a href="#">Seviye 7</a></h5></li>
                        <li><h5><a href="#">Seviye 8</a></h5></li>
                        <li><h5><a href="#">Seviye 9</a></h5></li>
                    </ul>
                  </div>
            </div>

            <!-- Saldırı kısmı 2.4 -->
             <div class="card mb-3 shadow-sm" style="display:none"></div>



        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="Frontend/js/bootstrap.min.js"></script>

</body>
</html>
