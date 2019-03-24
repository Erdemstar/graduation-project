<?php
  include "DB.php";
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
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );

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
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );
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

  class IDOR2{
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function getUsername($id){
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "users";
      // Create connection
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "select username from user_login where id='$id'";
      $result = $conn->query($sql);
      if (!$result){
        printf($conn->error);
      }
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          return $row["username"];
        }
      }
    }
    function updatePass($id,$pword){
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "users";
      // Create connection
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "update user_login set password='$pword'  where id='$id'";
      $result = $conn->query($sql);
      if (!$result){
        die("Şifre değişim sırasında bir hata oluştu.Lütfen sonra tekrar deneyiniz.");
      }
      $conn->close();
      $uname = $this->getUsername($id);
      echo ucfirst($uname) ." şifreniz başarıyla değiştirildi.";

    }


  }

  class XPATH{
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function Login($username,$password){
      $xml = simplexml_load_file("./include/xml/users.xml");
      $users =  $xml->xpath("/users/user[username='$username' and password='$password']");
      if (empty($users)){
        echo "Geçersiz bir kullanıcı adı veya parola girdiniz.";
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

  class SSRF{
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function get_Image($path){
      $tmp = file_get_contents($path);
      $name = "./include/pics/" .rand(). "img.jpg";
      file_put_contents($name, $tmp);
      return $name;
    }
    /*

    Kullanıcıdan bir url alıp aldığım url'in içeriğini alıyorum.Daha sonra bu içeriği yeni bir jpg uzantılı bir dosyaya
    ekliyorum.Daha sonra ekranda indirilen fotoğrafı gösteriyorum.Saldırı gereği burada kullanıcı "file:///etc/passwd" tarzı
    birşey girerse bunu okuyup daha sonra aynı şekilde random bir isimle .jpg uzantılı dosya ile ekranda göstermeye çalışıyor.
    İçeriği görüntülemek için cat ile okumak gerekiyor.

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
          echo '<div class="alert alert-danger" role="alert" style="margin-top:5%">';
            echo '<i class="dripicons-wrong mr-2"></i> Girilen <strong>password\'ler</strong> uyuşmuyor!';
          echo '</div>';
        }
      }
    }
    function updatePass($id,$pword){
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "users";
      // Create connection
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "update user_login set password='$pword'  where id='$id'";
      $result = $conn->query($sql);
      if (!$result){
        printf($conn->error);
      }
      echo "Password değiştirildi";
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
    /*Directory Travelsal*/
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

    /*
    Default verilen pathin içeriği okunur ve daha sonra kullanıcıya bastırılır.Bunun LFI'dan farkı burada metod verilen path'in içeriği okur ekrana basar
    Verilen path içersinde php komutları olsa dahi herhang bir şekilde yorumlanmaz.
    */
  }

  class HTTP_RH{
    /*HTTP request/header*/
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function getHeader(){
      return $_SERVER['HTTP_USER_AGENT'];
    }

    /*Kullacının user agent bilgisi doğrudan ekrana bastırılır.Burada kullanıcı user-agent üzerinde oynayıp
    xss çalıştırabilir*/
  }

  class RDA{
    /*Restirct Device Access*/
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function getHeader(){
      $header = $_SERVER['HTTP_USER_AGENT'];
      $android = stripos($header , "android");
      $ipad = stripos($header , "ipad");

      if ( $ipad !== false || $android !== false ){
        return $header;
      }
      else{
        return "Bu sayfa sadece tablet yada mobil kullanıcılar içindir";
      }
    }

    /*Okunan user agent bilgisi sayesinde sayfanın sadece ipad ve android'lere gösterilmesi sağlanmıiştır.Burada aynı şekilde proxy'yle bu bilgi
    değiştirilerek atlatılabilir.*/
  }

  class HPP{
    /*HTTP Parameter Population*/
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
  }

  class SXXS{
    /*Stored XSS*/
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function getData($query){
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "users";
      // Create connection
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = $query;
      $result = $conn->query($sql);
      /*
      Aşağı taraf eğer sorguda bir hata varsa ekrana basılacak olan taraftır.Error based SQL Injection
      yaparken insanların işlerine yarıyor.Bunu sildiğimde blind sql injection oluyor*/
      if (!$result){
        printf($conn->error);
      }

      $arr = array(); // sorgudan alacağı data'ları tutmak için kullandım

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          array_push($arr,$row["comment_content"]);
        }
        return $arr;
      }
      $conn->close();
    }
    function getDataQeuery(){
      $data = $this->getData("SELECT * FROM comments");
      foreach ($data as $value) {

        echo "<p>$value</p>";
      }

    }
    function insertData($data){
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "INSERT INTO comments (comment_content) VALUES ('".$data."')";
      $result = $conn->query($sql);

    }
  }

  class RFI{
    /*Remote File Include*/
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function getFile($path){
      include $path;
    }
  }

  class LSI{
    /*Login SQL Injection*/
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
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "select * from idor_user where username='$uname' and password='$pword'";
      $result = $conn->query($sql);
      if (!$result){
        echo $conn->error ."</br>";
      }

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          return $row["id"];
        }
      }
      else{
        echo "Kullanıcı adı veya parolası yanlıştır.";
      }
      $conn->close();

    }
    function Get_Data($id){
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "users";
      // Create connection
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );
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
    }

    /*
      Burada hiçbir önlem alınmadan kullanıcıdan login bilgileri girilmesi istiyoruz.Burada " ' or 1=1 -- -" yada
      daha farklı payload'larla login bypass edilebilir.
    */
  }

  class RI{
    /*Referer Injection*/
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function getReferer($ref){
      return $ref;
    }

    /*
      Referrer kısmında bir önceki sayfanın bilgileri tutularak kullanıcıya geri dönmesi için bir buton yapılmıştır.
      Örnek vermek gerek kullanıcı google'dan bu sayfaya geldiğini düşündüğünde butona bastığında tekrar google'geri dönebilir.
      Araya burp'le girerek referrer bilgisi değiştirilip xss yada html injection yapılabilir.
    */
  }

  class BSI{
    /*Blind SQL Injection*/
    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }
    function getUser($id){

      // Create connection
      $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname'] );
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $arr = array();
      $sql = "select * from idor_user where id='$id'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           array_push($arr,$row["firstname"] ." ". $row["lastname"] ." ". $row["age"] ." ". $row["address"] ." ". $row["phone"]);
        }
      }
      return $arr;
    }

    /*Burada blind sql injection yaptım.Kullanıcı meta karaterler girse bilse herhangi bir şekilde db hatası göremeyecektir.
    Burada gene belirli payload'larla üstesinden gelebiş.r*/
  }


?>
