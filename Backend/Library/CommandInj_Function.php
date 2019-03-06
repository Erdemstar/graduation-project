<?php

  class ComInj{


    function remSpace($data){
      return str_replace(" ","",$data);
    }

    function remSemic($data){
      return str_replace(";","",$data);
    }

    function remPipe($data){
      return str_replace("|","",$data);
    }

    function remAmp($data){
      return str_replace("&","",$data);
    }

    function findChar($char,$data){
      $loc = strpos($data,$char);
      if ($loc){
        return 1;
      }
      else {
        return 0;
      }
    }

    function level1($data){
      $tmp = "ping -c 3 ".$data;
      return shell_exec($tmp);

    }

    function level2($data){
      $tmp  = "ping -c 3 ".$data;
      $tmp2 = $this->findChar(";",$tmp);
      if ($tmp2){
        return "Yanlış bir karakter girdiniz !!!";
      }
      else {
        return shell_exec($tmp);
      }


    }

    function level3($data){
      $tmp  = "ping -c 3 ".$data;
      $tmp2 = $this->findChar(";",$tmp);
      $tmp3 = $this->findChar("|",$tmp);
      if ($tmp2 or $tmp3){
        return "Yanlış bir karakter girdiniz !!!";
      }
      else {
        return shell_exec($tmp);
      }



    }

    function level4($data){
      $tmp  = "ping -c 3 ".$data;
      $tmp2 = $this->findChar(";",$tmp);
      $tmp3 = $this->findChar("|",$tmp);
      $tmp4 = $this->findChar("&",$tmp);

      if ($tmp2 or $tmp3 or $tmp4){
        return "Yanlış bir karakter girdiniz !!!";
      }
      else {
        return shell_exec($tmp);
      }



    }


  }

/*
Level 1

    *Aldığı data'ya herhangi kontrol etmeneden doğruca shell_exec fonksiyonu içersine dahil ederek hedef
      üzerinden kod çalıştırmasına izin verilmiştir

Level 2

    *Burada alınan data içersinde ";" varsa ekrana bir uyarı döndüren yoksa shell_exec içersinde çalıştırırlır

Level 3

    *Burada alınan data içersinde ";" veya "|" varsa ekrana bir uyarı döndüren yoksa shell_exec içersinde çalıştırırlır


Level 4

    *Burada alınan data içersinde ";" , "|" veya "&" varsa ekrana bir uyarı döndüren yoksa shell_exec içersinde çalıştırırlır


?>
