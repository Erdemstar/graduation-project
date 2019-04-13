<div class="navbar-custom topnav-navbar">
    <div class="container-fluid">

        <!-- LOGO -->
        <a href="index.php" class="topnav-logo">
            <span class="topnav-logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="16">
            </span>
            <span class="topnav-logo-sm">
                <img src="assets/images/logo_sm.png" alt="" height="16">
            </span>
        </a>

        <ul class="list-unstyled topbar-right-menu float-right mb-0">

            <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                <a  class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img  class="mr-1" height="12"> <span class="align-middle">Select Language</span> <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">
                    <!-- item-->
                    <a href="index.php?language=TR" class="dropdown-item notify-item">
                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Türkçe</span>
                    </a>
                    <a href="index.php?language=EN" class="dropdown-item notify-item">
                        <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span>
                    </a>
                </div>
            </li>
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="<?=$_SESSION["pic"]?>"  alt="user-image" class="rounded-circle">
                    </span>
                    <span>
                        <span class="account-user-name">Welcome <?=ucfirst($_SESSION["name"])?></span>
                        <span class="account-position">Founder</span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-circle mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-edit mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="logout.php" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>
        </ul>
        <a class="button-menu-mobile disable-btn">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
    </div>
</div>
