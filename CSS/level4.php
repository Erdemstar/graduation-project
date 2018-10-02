<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Cross Site Scripting seviye 4</title>
</head>
<body>
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
    <?php
        if($_GET["name"])
        {
            $tmp = $_GET["name"];

        }

    ?>
    <div class="container" style="margin-top: 5%">

        <!-- Satır -->
        <div class="row">

            <!-- 1.parca -->
            <div class="col-md-3"></div>

            <!-- 2.parca -->
            <div class="col-md-6">

                <form ction="<?php $_PHP_SELF ?>" method="GET">

                   <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bolder">Name</label>
                        <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Please enter yourname">
                    </div>
                    <button type="submit" class="btn" style="margin-left:30%;">Gönder</button>
                    <a href="../index.php" class="btn btn-success" role="button">Gerigel</a>


                </form>


                <div style="margin-top:3%;">
                    <?php


                     /*
                      Burada script gördüğü kelimeyi'i --> '' yapacaktır.
                    */

                        $gcc = str_replace("<script>" ,"" , $tmp );
                        $gcc2 = str_replace("</script>" ,"" , $gcc );
                        print("<span style='font-weight:bolder;font-size:25px'>Hoşgeldin </span>$gcc2");


                    ?>

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