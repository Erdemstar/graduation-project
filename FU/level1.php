<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>File Upload seviye 1</title>
</head>
<body>
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);?>

    <div class="container" style="margin-top: 5%">

        <!-- Satır -->
        <div class="row">

            <!-- 1.parca -->
            <div class="col-md-3"></div>

            <!-- 2.parca -->
            <div class="col-md-6">

                <div style="margin-top:3%;" class="jumbotron">

                    <?php
                        $value = False;

                        $dizin = '/var/www/html/graduation-project/FU/uploads/';
                        $yuklenecek_dosya = $dizin . basename($_FILES['kulldosyasi']['name']);

                        if (move_uploaded_file($_FILES['kulldosyasi']['tmp_name'], $yuklenecek_dosya))
                        {
                            $value = True;
                        }

                    ?>

                    <?php

                        if($value)
                        {
                            $tmp = "uploads/" . $_FILES['kulldosyasi']['name'];
                            echo '<a href="' . $tmp .  '">Buraya tıkla</a>';

                        }

                    ?>



                    <form class="well" action="level1.php" method="post" enctype="multipart/form-data">

                        <p class="lead">Dosya yükleme ekranı</p>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="kulldosyasi">
                                <label class="custom-file-label" for="inputGroupFile04">Dosya Seçin</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" value="Upload" id="inputGroupFileAddon04">Yükle</button>
                            </div>
                            <div class="input-group-append">
                                <input id="inp" type="button" value="Geri" class="btn btn-outline-secondary" type="submit" onclick="location.href='/graduation-project/index.php';" />
                            </div>
                        </div>

                    </form>




                </div>






            </div>

            <!-- 3.parca -->
            <div class="col-md-3"></div>

         </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>