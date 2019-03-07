<?php

  class HTTP{
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
    function forward($path){
      header('Location:'. $path);
    }
  }
?>
