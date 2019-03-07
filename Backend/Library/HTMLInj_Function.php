<?php

  class HTMLInj{

    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function hideScript($data){
      $data = str_ireplace("script","",$data);
      $data = str_ireplace("alert","",$data);
      $data = str_ireplace("prompt","",$data);
      return $data;
    }
    function hideHtml($data){
      $data = str_ireplace("<","&lt",$data);
      $data = str_ireplace(">","&gt",$data);
      return $data;
    }
    function isChar($char){
      if (ctype_alpha($char)) {
        return "1";
      }
      else {
        return "0";
      }
    }
    function level1($data){
      $data = $this->hideScript($data);
      return $data;
    }
    function level2($data){
      $tmp = $this->isChar($data[0]);
      if ($tmp == "1"){
        return $data;
      }
      else{
        return "Lütfen isminizi giriniz !!!";
      }

    }
    function level3($data){
      $tmp = $this->isChar(substr($data,-1));
      if ($tmp == "1"){
        return $data;
      }
      else{
        return "Lütfen isminizi giriniz !!!";
      }
    }
    function level4($data){
      $tmp1 = $this->isChar(substr($data,-1));
      $tmp2 = $this->isChar($data[0]);

      if ($tmp1 == "1" && $tmp2 == "1"){
        return $data;
      }
      else{
        return "Lütfen isminizi giriniz !!!";
      }
    }
    function level5($data){
      $loc1 = strpos($data,"h3>");
      $loc2 = strpos($data,"h6>");
      if ($loc1 > 0 || $loc2 > 0){
        return $this->hideScript($data);
      }
      else{
        return "Lütfen adınızı giriniz !!!";
      }
    }
    function level6($data){
      $tmp = $this->hideHtml($data);
      return $this->hideScript(urldecode($tmp));
    }
    function level7($data){
      $tmp = urldecode($data);
      $tmp = $this->hideScript($tmp);
      $tmp = $this->hideHtml($tmp);
      return $tmp;
    }

  }

/*


  (Her levelde olabildiğince kullanıcandan alınan data içersinde js komutlarını ayıklamaya
  çalışılacak)

  level 1
    *Aldığı datayı hiç bir şekilde işlemeden doğrudan ekrana basar

  level 2
    *Aldığı datanın ilk karakterinin alfabede olup olmadığını kontrol edecek.Eğer varsa ekrana
    basacak

  level 3
    *Aldığı datanın son karakterinin alfabede olup olmadığını kontrol edecek.Eğer varsa ekrana
    basacak

  level 4
    *Aldığı datanın ilk ve son karakterinin alfabede olup olmadığını kontrol edecek.Eğer varsa ekrana
    basacak

  level 5
    *Kullanıcıya sadece izin verilen etiketler üzerinden birşeyler gönderilmesine izin verilecektir.
    Bunlar <h3></h3> ve <h6></h6> olacaktır.

  level 6
    *urldecode fonksiyonu yanlış yerde kullanıldığı için encode edilmiş data'lar bir yere takılmadan geçer

  level 7
    *Her türlü data kullanıcıdan kabul ediliyor.Burada elimden geldiğnice html ve js kodlarını kırpmaya
    çalıştım.


*/



?>
