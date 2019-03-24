<?php

class General{

  function getOS($user_agent) {

      $os_platform  = "Unknown OS Platform";
      $os_array     = array(
                            '/windows nt 10/i'      =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                      );

      foreach ($os_array as $regex => $value){
        if (preg_match($regex, $user_agent)){
              $os_platform = $value;
        }
      }
      return $os_platform;
  }
  function getBrowser($user_agent) {

      $browser        = "Unknown Browser";
      $browser_array = array(
                              '/msie/i'      => 'Internet Explorer',
                              '/firefox/i'   => 'Firefox',
                              '/safari/i'    => 'Safari',
                              '/chrome/i'    => 'Chrome',
                              '/edge/i'      => 'Edge',
                              '/opera/i'     => 'Opera',
                              '/netscape/i'  => 'Netscape',
                              '/maxthon/i'   => 'Maxthon',
                              '/konqueror/i' => 'Konqueror',
                              '/mobile/i'    => 'Handheld Browser'
                       );

      foreach ($browser_array as $regex => $value){
        if (preg_match($regex, $user_agent)){
            $browser = $value;
        }
      }
      return $browser;
  }
  function getErr(){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  }

  function startSes(){
    session_start();
  }
  function destSes(){
    $this->startSes();
    $_SESSION = array();
    session_destroy();
    //header('Location: /tems/login.php');
  }

  function Login($uname,$pword){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "users";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from user_login where username='$uname' and password='$pword'";
    $result = $conn->query($sql);
    if (!$result){
      printf($conn->error);
    }

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $this->giveSesData($row["id"] .",". $row["username"]);
      }
    }
    else{
      echo "Kullanıcı adı veya parolası yanlıştır.";
    }
    $conn->close();

  }
  function giveSesData($data){
    $data = explode(",",$data);
    $_SESSION["id"] = $data[0];
    $_SESSION["name"] = $data[1];
    header('Location: index.php');

  }
  function isnotLogined(){
    if (isset($_SESSION["id"]) && isset($_SESSION["name"])){

    }
    else{
      header('Location: /tems/login.php');
    }
  }
  function isLogined(){
    if (isset($_SESSION["id"]) && isset($_SESSION["name"])){
      header('Location: index.php');
    }
  }
}





 ?>
