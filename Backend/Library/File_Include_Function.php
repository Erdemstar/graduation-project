<?php

  class File{

    function level1($page){
      include "../".$page;
    }

    function level2($page){
      include "../include/php/" . $page;
    }

    function level3($page){

      echo "beklemektedir";
      /*
      $tmp = str_replace("../","",$page);
      include $tmp;
      */
    }


  }


/*

  Level1

    *Fonksiyona gelen $page değişkeni içersinde var olan path'i fonksiyon içersinde doğrudan include
    ediyorum.Hiç bir kontrol yapılmıyor."Burada yolu bir geri kayıdırıp gösterdim çünkü include
    dosyayı frontend dizinindedir."

  Level2

  *Fonksiyona gelen $page değeri içerinden sayfa file adı var.Fonksiyon içerisinden path verilmiş olduğundan
  burada karşı taraf level1'e göre data fazla "../" girip dizin olarak yukarı çıkması beklenmektedir.

*/

?>
