<?php

  class SQLInj{

    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function dbConnect($query){
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
          array_push($arr,$row["firstname"] . " " . $row["lastname"] . " " . $row["age"]);
        }
        return $arr;
      }
      $conn->close();
    }

    function level1($name){
      $sql = "SELECT * FROM user where firstname='$name'";
      return $this->dbConnect($sql);
      //echo $name;
    }

    function level2($name){
      if (preg_match('/ /', $name)) {
        die("ERROR NO SPACE");
      }
      else{
        $sql = "SELECT * FROM user where firstname='$name'";
        return $this->dbConnect($sql);
      }

    }

    function level3($name){
      if (preg_match('/\s+/', $name)) {
         die("ERROR NO SPACE");
      }
      else{
        $sql = "SELECT * FROM user where firstname='$name'";
        return $this->dbConnect($sql);
      }

    }

    function level4($id){
      if (!preg_match('/^[0-9]+/', $id)) {
        die("ERROR INTEGER REQUIRED");
      }
      else{
        $sql = "SELECT * FROM user where id=$id";
        return $this->dbConnect($sql);
      }

    }

    function level5($id){
      if (!preg_match('/[0-9]+$/', $id)) {
        die("ERROR INTEGER REQUIRED");
      }
      else{
        $sql = "SELECT * FROM user where id=$id";
        return $this->dbConnect($sql);
      }

    }
  }

  /*
  Level 1

      *Aldığı data'yı kontrol etmenden doğurdan sql sorgusuna tutar.Her türlü saldırı yapılabilir.

  Level 2

      *URL'den aldığı "name" paramatresi içersinde bir boşluk varsa doğrudan ekrana "die" fonksiyonu
      ile bir uyarı yazdırır.("die" fonksiyonundan sonraki kodlar çalışmaz)

  Level 3

      *Burada bir önceki seviye ile yakın bir yaklaşım yapılmıştır.Kullannıcıdan alınan data içersinde
      boşluk olup olmadığı regex ile kontrol edilmiştir.Eğer boşluk varsa ekrana "die" uyarı yazdırır.


  Level 4
      *Kullanıcıdan aldığı "id" parametresinin ilk değeri int olup olmadığının kontrolünü regex ile yapar.
      Eğer int değilse "die" ile ekrana uyarı bastırır

  Level 5
      *Kullanıcıdan aldığı "id" parametresinin son değeri int olup olmadığının kontrolünü regex ile yapar.
      Eğer int değilse "die" ile ekrana uyarı bastırır

  ?>



?>
