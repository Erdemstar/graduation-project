<?php

  class Different_Type{

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



  }


?>
