<?php
  include ("Backend/Library/General_Function.php");
  $general = new General;
  $general->startSes();
  $general->isLogined();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- App css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="auth-fluid-pages pb-0">

  <div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
      <div class="align-items-center d-flex h-100">
        <div class="card-body">

          <!-- Logo -->
          <div class="auth-brand text-center text-lg-left">
            <a href="index.html">
              <span><img src="assets/images/logo-light.png" alt="" height="18"></span>
            </a>
          </div>

          <!-- title-->
          <h4 class="mt-0">Sign In</h4>
          <p class="text-muted mb-4">Enter your username and password to access account.</p>

          <!-- form -->
          <form action="<?php $_PHP_SELF ?>" method="POST">
            <div class="form-group">
              <label for="emailaddress">Username</label>
              <input class="form-control" type="text" id="username" name="username" required="" placeholder="Enter your username">
            </div>
            <div class="form-group">
              <a href="pages-recoverpw-2.html" class="text-muted float-right"><small>Forgot your password?</small></a>
              <label for="password">Password</label>
              <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group mb-0 text-center">
              <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> Log In </button>
            </div>
            <!-- social-->
            <div class="text-center mt-4">
              <p class="text-muted font-16">Sign in with</p>
              <ul class="social-list list-inline mt-3">
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-linkedin"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                </li>
              </ul>
            </div>
          </form>
          <!-- end form-->
          <?php
            if (isset($_POST["username"]) && isset($_POST["password"]) ){
              $general->Login($_POST["username"],$_POST["password"]);
            }
         ?>



        </div> <!-- end .card-body -->
      </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
      <div class="auth-user-testimonial">
        <h2 class="mb-3">I love the color!</h2>
        <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
        </p>
        <p>
          - Hyper Admin User
        </p>
      </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
  </div>
  <!-- end auth-fluid-->

  <!-- App js -->
  <script src="assets/js/app.min.js"></script>

</body>

</html>
