<?php
  $loc1 = stripos($_SERVER['SCRIPT_NAME'],"sql");
  $loc2 = stripos($_SERVER['SCRIPT_NAME'],"fi");
  $loc3 = stripos($_SERVER['SCRIPT_NAME'],"dif");

  $isActive1 = "";
  $isActive2 = "";
  $isActive3 = "";

  if ($loc1 > 1){
    $isActive1 = "active";
  }
  if ($loc2 > 1){
    $isActive2 = "active";
  }
  if ($loc3 > 1){
    $isActive3 = "active";
  }



?>

<div class="left-side-menu">

            <div class="leftbar-user">
                <a href="#">
                    <img src="<?=$_SESSION["pic"]?>" alt="user-image" height="42" class="rounded-circle shadow-sm">
                    <span class="leftbar-user-name">Welcome <?=ucfirst($_SESSION["name"])?></span>
                </a>
            </div>

            <!--- Sidemenu -->
            <ul class="metismenu side-nav">

                <li class="side-nav-title side-nav-item">Saldırı Türleri</li>

                <!-- XSS -->
                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="dripicons-view-apps"></i>
                        <span>Cross Site Script</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <a href="XSSLevel1.php">Seviye 1</a>
                        </li>
                        <li>
                            <a href="XSSLevel2.php">Seviye 2</a>
                        </li>
                        <li>
                            <a href="XSSLevel3.php">Seviye 3</a>
                        </li>
                        <li>
                            <a href="XSSLevel4.php">Seviye 4</a>
                        </li>
                        <li>
                            <a href="XSSLevel5.php">Seviye 5</a>
                        </li>
                        <li>
                            <a href="XSSLevel6.php">Seviye 6</a>
                        </li>
                        <li>
                            <a href="XSSLevel7.php">Seviye 7</a>
                        </li>
                    </ul>
                </li>
                <!-- SQL Inj -->
                <li class="side-nav-item <?=$isActive1?>">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="dripicons-view-apps"></i>
                        <span>SQL Injection</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <a href="SQLILevel1.php?name=James">Seviye 1</a>
                        </li>
                        <li>
                            <a href="SQLILevel2.php?name=James">Seviye 2</a>
                        </li>
                        <li>
                            <a href="SQLILevel3.php?name=James">Seviye 3</a>
                        </li>
                        <li>
                            <a href="SQLILevel4.php?id=1">Seviye 4</a>
                        </li>
                        <li>
                            <a href="SQLILevel5.php?id=1">Seviye 5</a>
                        </li>
                        <!-- 
                        <li>
                             <a href="SQLILevel6.php">Seviye 6</a>
                        </li>
                        <li>
                            <a href="SQLILevel7.php">Seviye 7</a>
                        </li>
                        -->
                    </ul>
                </li>
                <!-- HTML Inj -->
                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="dripicons-view-apps"></i>
                        <span>HTML Injection</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <a href="HILevel1.php">Seviye 1</a>
                        </li>
                        <li>
                            <a href="HILevel2.php">Seviye 2</a>
                        </li>
                        <li>
                            <a href="HILevel3.php">Seviye 3</a>
                        </li>
                        <li>
                            <a href="HILevel4.php">Seviye 4</a>
                        </li>
                        <li>
                            <a href="HILevel5.php">Seviye 5</a>
                        </li>
                        <li>
                            <a href="HILevel6.php">Seviye 6</a>
                        </li>
                        <li>
                            <a href="HILevel7.php">Seviye 7</a>
                        </li>
                    </ul>
                </li>
                <!-- File Upload -->
                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="dripicons-view-apps"></i>
                        <span>File Upload</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <a href="FULevel1.php">Seviye 1</a>
                        </li>
                        <li>
                            <a href="FULevel2.php">Seviye 2</a>
                        </li>
                        <li>
                            <a href="FULevel3.php">Seviye 3</a>
                        </li>
                        <li>
                            <a href="FULevel4.php">Seviye 4</a>
                        </li>
                    </ul>
                </li>

                <!-- File İnclude -->
                <li class="side-nav-item <?=$isActive2?>">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="dripicons-view-apps"></i>
                        <span>File Include</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <a href="FILevel1.php?page=include/html/statistics.html">Seviye 1</a>
                        </li>
                        <li>
                            <a href="FILevel2.php?page=text.php">Seviye 2</a>
                        </li>
                        <li>
                            <a href="FILevel3.php">Seviye 3</a>
                        </li>
                    </ul>
                </li>
                <!-- Command Injection -->
                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="dripicons-view-apps"></i>
                        <span>Command Injection</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <a href="ComInjLevel1.php">Seviye 1</a>
                        </li>
                        <li>
                            <a href="ComInjLevel2.php">Seviye 2</a>
                        </li>
                        <li>
                            <a href="ComInjLevel3.php">Seviye 3</a>
                        </li>
                        <li>
                            <a href="ComInjLevel4.php">Seviye 4</a>
                        </li>
                    </ul>
                </li>
                <!-- Code Injection -->
                <li class="side-nav-item">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="dripicons-view-apps"></i>
                        <span>Code Injection</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <a href="CodeInjLevel1.php">Seviye 1</a>
                        </li>
                        <li>
                            <a href="CodeInjLevel2.php">Seviye 2</a>
                        </li>
                        <li>
                            <a href="CodeInjLevel3.php">Seviye 3</a>
                        </li>
                        <li>
                            <a href="CodeInjLevel4.php">Seviye 4</a>
                        </li>
                        <li>
                            <a href="CodeInjLevel5.php">Seviye 5</a>
                        </li>
                    </ul>
                </li>

                <!-- Farklı Tip Saldırılar -->

                <li class="side-nav-item <?=$isActive3?>">
                    <a href="javascript: void(0);" class="side-nav-link">
                        <i class="dripicons-view-apps"></i>
                        <span>Diffrent Type Attack</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-second-level" aria-expanded="false">
                        <li>
                            <a href="DIF_BSI.php">Blind SQL Injection</a>
                        </li>
                        <li>
                            <a href="DIF_SXSS.php">Stored XSS</a>
                        </li>
                        <li>
                            <a href="DIF_DBXSS.php">DOM Based XSS</a>
                        </li>
                        <li>
                            <a href="DIF_CSRF.php">Cross Side Request Forgery</a>
                        </li>
                        <li>
                            <a href="DIF_SSRF.php">Server Side Request Forgery</a>
                        </li>
                        <li>
                            <a href="DIF_SSTI.php">Server Side Template Injection</a>
                        </li>
                        <li>
                            <a href="DIF_DT.php?page=include/html/statistics.html">Directory Travelsal</a>
                        </li>
                        <li>
                            <a href="DIF_HTTP-GET.php">HTTP GET Login Bruteforce</a>
                        </li>
                        <li>
                            <a href="DIF_HTTP-POST.php">HTTP POST Login Bruteforce</a>
                        </li>
                        <li>
                            <a href="DIF_HTTP-RH.php">HTTP Request Header Injection</a>
                        </li>
                        <li>
                            <a href="DIF_IDOR-1-login.php">Insecure Directory Object Request 1</a>
                        </li>
                        <li>
                            <a href="DIF_IDOR-2.php">Insecure Directory Object Request 2</a>
                        </li>
                        <li>
                            <a href="DIF_JSBpass.php">Javascript Bypass</a>
                        </li>
                        <li>
                            <a href="DIF_LSI.php">Login SQL Injection</a>
                        </li>
                        <li>
                            <a href="DIF_RDA.php">Restirct Device Access</a>
                        </li>
                        <li>
                            <a href="DIF_REDIRECT.php">Unvalidated Redirects and Forward</a>
                        </li>
                        <li>
                            <a href="DIF_RFI.php?page=./include/html/statistics.html">Remote File Include</a>
                        </li>

                        <li>
                            <a href="DIF_RI.php">Referrer Injection</a>
                        </li>
                        <li>
                            <a href="DIF_XPATH-Login.php">XPATH Injection</a>
                        </li>
                        <li>
                            <a href="DIF_XEE.php">XML External Entity Injection</a>
                        </li>
                    </ul>
                </li>

            </ul>

</div>
<!-- Left Sidebar End -->
