<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Graduation Project</title>
</head>
<body>
<?php
        $viewer = getenv( "HTTP_USER_AGENT" );
        $browser = "An unidentified browser";
        $platform = "An unidentified OS!";

        if (  preg_match( "/MSIE/i", "$viewer" ) )
        {
            $browser = "Internet Explorer";
        }
        else if (  preg_match( "/Netscape/i", "$viewer" ) )
        {
            $browser = "Netscape";
        }
        else if (  preg_match( "/Mozilla/i", "$viewer" ) )
        {
            $browser = "Mozilla";
        }

        if (  preg_match( "/Windows/i", "$viewer" ) )
        {
            $platform = "Windows";
        }
        else if (  preg_match( "/Linux/i", "$viewer" ) )
        {
            $platform = "Linux";
        }
    ?>
     <!-- Giriş 1 -->
    <div class="container" style="margin-top: 5%">

        <div class="jumbotron">
          <h1 class="display-4">Hoşgeldiniz</h1>
          <p class="lead">
              Bu uygulama Web Uygulaması geliştiren kişilere yazılımsal hataların nelere sebeb olacağını göstermek ve aynı zamanda Web açıkları
              arayan kişilere üzerinde uygulama yapabilecekleri bir ortam sağlamaktadır
          </p>
          <hr class="my-4">
          <p>Kullandığın tarayıcı <?=$browser?> , kullandığın işletim sistemi ise <?=$platform?></p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>

    </div>


     <!-- Saldırı kısmı 1 -->
    <div class="container" style="margin-top: 5%">
        <div class="card-deck mb-3 text-center">

            <!-- Saldırı kısmı 1.1 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="CSS/level0.php" style="color: black">Cross Site Scripting</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="CSS/level1.php">Seviye 1</a></h5></li>
                        <li><h5><a href="CSS/level2.php">Seviye 2</a></h5></li>
                        <li><h5><a href="CSS/level3.php">Seviye 3</a></h5></li>
                        <li><h5><a href="CSS/level4.php">Seviye 4</a></h5></li>
                        <li><h5><a href="CSS/level5.php">Seviye 5</a></h5></li>
                        <li><h5><a href="CSS/level6.php">Seviye 6</a></h5></li>
                        <li><h5><a href="CSS/level7.php">Seviye 7</a></h5></li>
                        <li><h5><a href="#">Seviye 8</a></h5></li>
                        <li><h5><a href="#">Seviye 9</a></h5></li>
                    </ul>
                  </div>
            </div>
            <!-- Saldırı kısmı 1.2 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="#" style="color: black">SQL Injection</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="#">Seviye 1</a></h5></li>
                        <li><h5><a href="#">Seviye 2</a></h5></li>
                        <li><h5><a href="#">Seviye 3</a></h5></li>
                        <li><h5><a href="#">Seviye 4</a></h5></li>
                        <li><h5><a href="#">Seviye 5</a></h5></li>
                    </ul>
                  </div>
            </div>
            <!-- Saldırı kısmı 1.3 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="FU/level0.php" style="color: black">File Upload</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="FU/level1.php">Seviye 1</a></h5></li>
                        <li><h5><a href="#">Seviye 2</a></h5></li>
                        <li><h5><a href="#">Seviye 3</a></h5></li>
                        <li><h5><a href="#">Seviye 4</a></h5></li>
                        <li><h5><a href="#">Seviye 5</a></h5></li>
                    </ul>
                  </div>
            </div>
            <!-- Saldırı kısmı 1.4 -->
            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="#" style="color: black">File Include</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="#">Seviye 1</a></h5></li>
                        <li><h5><a href="#">Seviye 2</a></h5></li>
                        <li><h5><a href="#">Seviye 3</a></h5></li>
                        <li><h5><a href="#">Seviye 4</a></h5></li>
                        <li><h5><a href="#">Seviye 5</a></h5></li>
                    </ul>
                  </div>
            </div>



        </div>
    </div>

     <!-- Saldırı kısmı 12 -->
    <div class="container" style="margin-top: 5%">
        <div class="card-deck mb-3 text-center">

            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="#" style="color: black">Cross Site Scripting</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="#">Seviye 1</a></h5></li>
                        <li><h5><a href="#">Seviye 2</a></h5></li>
                        <li><h5><a href="#">Seviye 3</a></h5></li>
                        <li><h5><a href="#">Seviye 4</a></h5></li>
                        <li><h5><a href="#">Seviye 5</a></h5></li>
                        <li><h5><a href="#">Seviye 6</a></h5></li>
                        <li><h5><a href="#">Seviye 7</a></h5></li>
                        <li><h5><a href="#">Seviye 8</a></h5></li>
                        <li><h5><a href="#">Seviye 9</a></h5></li>
                    </ul>
                  </div>
            </div>

            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="#" style="color: black">SQL Injection</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="#">Seviye 1</a></h5></li>
                        <li><h5><a href="#">Seviye 2</a></h5></li>
                        <li><h5><a href="#">Seviye 3</a></h5></li>
                        <li><h5><a href="#">Seviye 4</a></h5></li>
                        <li><h5><a href="#">Seviye 5</a></h5></li>
                    </ul>
                  </div>
            </div>

            <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="#" style="color: black">File Upload</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="#">Seviye 1</a></h5></li>
                        <li><h5><a href="#">Seviye 2</a></h5></li>
                        <li><h5><a href="#">Seviye 3</a></h5></li>
                        <li><h5><a href="#">Seviye 4</a></h5></li>
                        <li><h5><a href="#">Seviye 5</a></h5></li>
                    </ul>
                  </div>
            </div>

             <div class="card mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><a href="#" style="color: black">File Include</a></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><h5><a href="#">Seviye 1</a></h5></li>
                        <li><h5><a href="#">Seviye 2</a></h5></li>
                        <li><h5><a href="#">Seviye 3</a></h5></li>
                        <li><h5><a href="#">Seviye 4</a></h5></li>
                        <li><h5><a href="#">Seviye 5</a></h5></li>
                    </ul>
                  </div>
            </div>



        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>
</html>