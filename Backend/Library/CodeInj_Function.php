<?php

  class CodeInj{

    function level1($data){
      @eval ("echo " . $data . ";");
    }

    function level2($data){
      $loc = strpos(" ".$data,"system");
      if ($loc == 1){
        echo  "Lütfen geçerli bir isim giriniz";
      }
      else {
        @eval ("echo " . $data . ";");
      }
    }

    function level3($data){
      $loc1 = strpos(" ".$data,"system");
      $loc2 = strpos(" ".$data,"exec");

      if ($loc1 == 1 || $loc2 == 1){
        echo  "Lütfen geçerli bir isim giriniz";
      }
      else {
        @eval ("echo " . $data . ";");
      }
    }

    function level4($data){
      $loc1 = strpos(" ".$data,"system");
      $loc2 = strpos(" ".$data,"exec");
      $loc3 = strpos(" ".$data,"shell_exec");

      if ($loc1 == 1 || $loc2 == 1 || $loc3 == 1){
        echo  "Lütfen geçerli bir isim giriniz";
      }
      else {
        @eval ("echo " . $data . ";");
      }
    }

    function level5($data){
      $loc1 = strpos(" ".$data,"system");
      $loc2 = strpos(" ".$data,"exec");
      $loc3 = strpos(" ".$data,"shell_exec");
      $loc4 = strpos(" ".$data,"shell_exec");

      if ($loc1 == 1 || $loc2 == 1 || $loc3 == 1 || $loc4 == 1){
        echo  "Lütfen geçerli bir isim giriniz";
      }
      else {
        @eval ("echo " . $data . ";");
      }
    }








  }


/*

  Level 1
    * Burada hiçbir kontrol yapmadan alınan datayı doğrudan eval'a koyduk

  Level 2
    * Burada gelen data içersinde system varsa çalıştırmıyoruz diğer türlü eval içersine gömüyoruz

  Level 3
    * Burada gelen data içersinde system , exec varsa çalıştırmıyoruz diğer türlü eval içersine gömüyoruz

  Level 4
    * Burada gelen data içersinde system ,exec , shell_exec varsa çalıştırmıyoruz diğer türlü eval içersine gömüyoruz

  Level 5
    * Burada gelen data içersinde system , exec , shell_exec , passthru varsa çalıştırmıyoruz diğer türlü eval içersine gömüyoruz

  Diğer seviyelerde kullanıcıdan alınan data içersinde boşlukları resplace edilebilir.

 system()
 exec()
 shell_exec()
 passthru()
*/
?>
