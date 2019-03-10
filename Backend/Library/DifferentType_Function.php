<?php

  class HTTP{

    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function HTTP_GET_Login($username ,$password){
      if ($username == "root" && $password == "toor"){
          return "Hoşgeldiniz $username";
      }
      else{
        return "Kullanıcı adı veya parola yanlıştır !!!";
      }

    }
    function HTTP_POST_Login($username ,$password){
      if ($username == "root" && $password == "root"){
          return "Hoşgeldiniz $username";
      }
      else{
        return "Kullanıcı adı veya parola yanlıştır !!!";
      }

    }

    /*

      HTTP Get Login ve HTTP Post Login basitçe kullanıcı aldığı data'ları içerisinde kıyaslıp
      one göre hareket ediyor

    */


  }

  class IDOR{

    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function Login($uname , $pword){
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
      $sql = "select * from idor_user where username='$uname' and password='$pword'";
      $result = $conn->query($sql);
      if (!$result){
        printf($conn->error);
      }

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          return $row["id"];
        }
      }
      else{
        die("Kullanıcı adı veya parolası yanlıştır.");
      }
      $conn->close();

    }
    function Get_Data($id){
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
      $sql = "select * from idor_user where id='$id'";
      $result = $conn->query($sql);
      if (!$result){
        printf($conn->error);
      }

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          return $row["firstname"] ." ". $row["lastname"] ." ". $row["age"] ." ". $row["address"] ." ". $row["phone"] ." ". $row["picture"];
        }
      }
      $conn->close();
    }

    /*

      Burada ise kullanıcıya ilk olarak bir login ekranı sunuyorum ve ondan username ve password bilgisi istiyip bunu
      sql içersinde Login function ile bulup geri kullanıcı id'si döndürüyorum.Daha sonra elde ettiğim bu id üzerinden
      Idor_Home ekranına http_post istediği atıp içesinde ilk function'dan elde ettiğim id değerini döndürüp
      Idor_Home içersinde bu id'yi alıp Get_Data ile login olmuş kullaınıcı biglerine erişiyorum.Burada login olduktan
      Idor_Home sayfasına atılan istekte id değerini değiştirdiğinizde başka bir kullanıcı bilgilerini getirildiği görülecketir.


    */

  }

  class XPATH{

    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function Login($username,$password){
      $xml = simplexml_load_file("./users.xml");
      $users =  $xml->xpath("/users/user[username='$username' and password='$password']");
      if (empty($users)){
        die("Geçersiz bir kullanıcı adı veya parola girdiniz.");
      }
      else{
        return $users;
      }
    }

    /*
      Bu türde kullanıcıdan username ve password bilgisi alıyorum daha sonra Login fonksiyonuna
      parametre olarak atıp burada aynı path'de bulunan users.xml ile kıyaslıyorum.Eğer böyle
      bir username ve password var ise login ekranına Hoşgeldiniz .. .. diyorum.Burada
      deneme' or '1'='1 şeklinde bir payload girilerek tüm kullanıcıları dökebiliyor.Tasarım
      kısmı hala yarıda kaldı fakat işlev olarak bir sıkıntı yok.
    */
  }

  class Redirect{

    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function forward($path){
      header('Location:'. $path);
    }

    /*
      Redirect.php ekranına 3 farklı a href'lerle yapılmış link var.Bu link'ler Redirect.php
      sayfası içerinde $_GET["path"]'e istek yapılacka şekilde ayarlanmıştır.Burada GET'den alınan data
      forward ile hedefe yönlendiriliypr.Burada hacker bu get'in path'den sonraki kısmını yakalayıp kullanıcıyı
      güvenilir yerden güvensiz bir sayfaya yönlendirir.
    */
  }

  class CSRF{
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function changePass($id,$pass1,$pass2) {
      if (!empty($pass1) && !empty($pass2) )
      {
        if ($pass1 == $pass2){
          $this->updatePass($id,$pass1);
        }
        else{
          echo "Girilen şifreler uyuşmuyor";
        }
      }
    }
    function updatePass($id,$pword){
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
      $sql = "update user_login set password='$pword'  where id='$id'";
      $result = $conn->query($sql);
      if (!$result){
        printf($conn->error);
      }
      $conn->close();

    }
    /*
      Burada basitçe kullaınıcıdan var olan user'ın şifresini değiştirmesi için şifre doğrulaması için 2 defe girilmesi
      isteniyor.Burada bu kontroller changePass ile yapılırken daha sonra updatePass ile sql sorgusu yapılarak şifrede
      değişiklik yapılıyor.Burada kullanıcı bir yanden bu site üzerindeki session'ı açık olurken diğer sekmede ise benim
      yaptığım forma gidip buton'a bastığında bu sayfaya bir post istediği yapıp var olan kullanıcının password'u değişmiş
      oluyor.
    */
  }

  class JS_Bypass{
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function Take($fname , $lname){
      return "Hoşgeldiniz ". $fname ." ". $lname;
    }

    /*
      Burada kullaınıcıdan ad soyad bilgisi alıp hiç bir kontrol etmeden geri döndürüyorum.fakat
      client side olarak javascript kodları çalıştırıp kullanıcıdan sadece harf girmesini bekliyorum.
      Bunu saldırıy aşmak için proxy kullanılıyor.
    */

  }

  class DT{
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function readFile($file){
       $page = file_get_contents($file);
       return $page;
    }
  }

  class XXE{
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    
  }
?>
