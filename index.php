<?php
  include ("Backend/Library/General_Function.php");
  include ("Content.php");
  $general = new General;
  $general->startSes();
  $general->isnotLogined();
  $general->cookieControl();
  $selection = ($_COOKIE["lang"] == "TR" ? 0 : 1);


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

              <div class="row">

                  <!-- XSS -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Cross Site Scripting</h3>
                        <p class="text-muted mb-2">
                          <?=$XSS[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                          <?=$XSS[$selection][1]?>

                        </p>
                        <h5><?=$XSS[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Cross-site_Scripting">OWASP</a></li>
                          <li><a href="https://www.netsparker.com/blog/web-security/cross-site-scripting-xss/">Netsparker</a></li>
                          <li><a href="https://www.veracode.com/security/xss">Veracode</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- SQL Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">SQL Injection</h3>
                        <p class="text-muted mb-2">
                            <?=$SQLI[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$SQLI[$selection][1]?>
                        </p>
                        <h5><?=$SQLI[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/SQL_Injection">OWASP</a></li>
                          <li><a href="https://www.netsparker.com/blog/web-security/sql-injection-cheat-sheet/">Netsparker</a></li>
                          <li><a href="https://www.veracode.com/security/sql-injection">Veracode</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- HTML Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">HTML Injection</h3>
                        <p class="text-muted mb-2">
                            <?=$HTMLI[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                          <?=$HTMLI[$selection][1]?>
                        </p>
                        <h5><?=$HTMLI[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Testing_for_HTML_Injection">OWASP</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- File Upload -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">File Upload</h3>
                        <p class="text-muted mb-2">
                            <?=$FU[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$FU[$selection][1]?>
                        </p>
                        <h5><?=$FU[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Unrestricted_File_Upload">OWASP</a></li>
                          <li><a href=">https://www.netsparker.com/web-vulnerability-scanner/vulnerabilities/unrestricted-file-upload/"</a>Netsparker</li>
                          <li><a href="https://infosecaddicts.com/exploit-file-upload-vulnerability/">Diğer</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- File include -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">File Include</h3>
                        <p class="text-muted mb-2">
                            <?=$FI[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                          <?=$FI[$selection][1]?>
                        </p>
                        <h5><?=$FI[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion">OWASP</a></li>
                          <li><a href="https://null-byte.wonderhowto.com/how-to/exploit-php-file-inclusion-web-apps-0179955/">Null-Byte</a></li>
                          <li><a href="https://www.sunnyhoi.com/how-to-hack-a-website-using-local-file-inclusion-lfi/">Diğer</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- Command Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Command Injection</h3>
                        <p class="text-muted mb-2">
                            <?=$ComI[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$ComI[$selection][1]?>
                        </p>
                        <h5><?=$ComI[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Command_Injection">OWASP</a></li>
                          <li><a href="https://www.netsparker.com/blog/web-security/command-injection-vulnerability/">Null-Byte</a></li>
                          <li><a href="https://portswigger.net/web-security/os-command-injection">Portswigger</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- Code Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Code Injection</h3>
                        <p class="text-muted mb-2">
                            <?=$CodeI[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$CodeI[$selection][1]?>
                        </p>
                        <h5><?=$CodeI[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Code_Injection">OWASP</a></li>
                          <li><a href="https://www.acunetix.com/blog/articles/code-injection/">Acunetix</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- CSRF  -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Cross Side Request Forgery</h3>
                        <p class="text-muted mb-2">
                            <?=$CSRF[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$CSRF[$selection][1]?>
                        </p>
                        <h5><?=$CSRF[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Cross-Site_Request_Forgery">OWASP</a></li>
                          <li><a href="https://null-byte.wonderhowto.com/how-to/manipulate-user-credentials-with-csrf-attack-0186461/">Null-Byte</a></li>
                          <li><a href="https://www.veracode.com/security/csrf">Veracode</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- SSRF  -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Side Side Request Forgery</h3>
                        <p class="text-muted mb-2">
                            <?=$SSRF[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$SSRF[$selection][1]?>
                        </p>
                        <h5><?=$SSRF[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Server_Side_Request_Forgery">OWASP</a></li>
                          <li><a href="https://www.hackerone.com/blog-How-To-Server-Side-Request-Forgery-SSRF">Hackerone</a></li>
                          <li><a href="https://canyoupwn.me/tr-ssrf-server-side-request-forgery-zafiyeti/">Canyoupwn</a></li>

                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- SSTI  -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Server Side Template Injection</h3>
                        <p class="text-muted mb-2">
                            <?=$SSTI[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$SSTI[$selection][1]?>
                        </p>
                        <h5><?=$SSTI[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Cross-Site_Request_Forgery">OWASP</a></li>
                          <li><a href="https://null-byte.wonderhowto.com/how-to/manipulate-user-credentials-with-csrf-attack-0186461/">Null-Byte</a></li>
                          <li><a href="https://www.veracode.com/security/csrf">Veracode</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- Directory Travelsal -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Directory Travelsal</h3>
                        <p class="text-muted mb-2">
                            <?=$DirecTra[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$DirecTra[$selection][1]?>
                        </p>
                        <h5><?=$DirecTra[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Path_Traversal">OWASP</a></li>
                          <li><a href="https://www.acunetix.com/websitesecurity/directory-traversal/">Acunetix</a></li>
                          <li><a href="https://null-byte.wonderhowto.com/how-to/perform-directory-traversal-extract-sensitive-information-0185558/">Null-Byte</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- IDOR -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">Insecure Directory Object Request</h3>
                        <p class="text-muted mb-2">
                            <?=$IDOR[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$IDOR[$selection][1]?>
                        </p>
                        <h5><?=$IDOR[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/Testing_for_Insecure_Direct_Object_References">OWASP</a></li>
                          <li><a href="https://www.bugcrowd.com/how-to-find-idor-insecure-direct-object-reference-vulnerabilities-for-large-bounty-rewards/">Bugcrowd</a></li>
                          <li><a href="https://www.bugbountynotes.com/training/tutorial?id=2">Bugbountynotes</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- XPATH Injection -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">XPATH Injection</h3>
                        <p class="text-muted mb-2">
                            <?=$Xpath[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$Xpath[$selection][1]?>
                        </p>
                        <h5><?=$Xpath[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/XPATH_Injection">OWASP</a></li>
                          <li><a href="https://www.acunetix.com/vulnerabilities/web/xpath-injection-vulnerability/">Acunetix</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- XXE -->
                  <div class="col-md-12">
                    <div class="card d-block">
                      <div class="card-body">
                        <h3 class="mt-0">XML External Entity Injection</h3>
                        <p class="text-muted mb-2">
                            <?=$XEE[$selection][0]?>
                        </p>
                        <p class="text-muted mb-4">
                            <?=$XEE[$selection][1]?>
                        </p>
                        <h5><?=$XEE[$selection][2]?></h5>
                        <ul>
                          <li><a href="https://www.owasp.org/index.php/XML_External_Entity">OWASP</a></li>
                          <li><a href="https://www.bgasecurity.com/2014/02/xxe-xml-external-entity-guvenlik/">BGA</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                </div> <!-- row close -->

            </div>
          </div>
        </div>
      </div>
      <?php include "_footer.php"?>

    </body>
</html>
