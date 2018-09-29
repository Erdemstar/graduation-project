<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="../css/custom.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Cross Site Scripting seviye 1</title>
</head>
<body>

    <?php
        if($_GET["name"])
        {
            $tmp = $_GET["name"];

        }

    ?>
    <div class="container" style="margin-top: 5%">


        <form ction="<?php $_PHP_SELF ?>" method="GET">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        <div style="margin-top:3%;">
            <h3>Welcome <?=$tmp?></h3>
        </div>


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>