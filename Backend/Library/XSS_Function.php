<?php

  class XSS{

    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function level1($data){

      return $data;

    }

    function level2($data){

      $tmp = str_replace("<script>","",$data);
      $tmp = str_replace("</script>","",$tmp);
      return $tmp;

    }

    function level3($data){

      $tmp = str_replace("<SCRIPT>","",$data);
      $tmp = str_replace("</SCRIPT>","",$tmp);
      return $tmp;

    }

    function level4($data){

      $tmp = str_ireplace("<s","",$data);
      $tmp = str_ireplace("</s","",$tmp);
      return $tmp;

    }

    function level5($data){

      $tmp = str_ireplace("alert","",$data);
      return $tmp;

    }

    function level6($data){

      $tmp1 = $this->level5($this->level4($data));
      return $tmp1;

    }

    function level7($data){

      $tmp  = str_ireplace("prompt","",$data);
      $tmp2 = $this->level6($tmp);
      return $tmp2;

    }

  }

/*
XSS Level 1

      *Aldığı datalar işlenmeden return edilir.Örnek vermek "$data --> <script>alert(1;)</script" alıp bir
      işleme tutmadan geri return eder.
*/

/*
XSS Level 2

      *Aldığı $data değişkeni üzerinden <script>,</script>  etiketi alıp bunu boşluğu çevirip return edilir.
      $data = <script>alert(1);</script> --> alert(1);
      $data = <Script>alert(1);</Script> -->  <Script>alert(1;)</Script> XSS çalışır
*/

/*
XSS Level 3

      *Aldığı $data değişkeni üzerinden <SCRIRPT>,</SCRIRPT> etiketi alıp bunu boşluğu çevirip return edilir.
      $data = <SCRIPT>alert(1);</SCRPIT> --> alert(1);
      $data = <Script>alert(1);</Script> -->  <Script>alert(1;)</Script> XSS çalışır
*/

/*
XSS Level 4

      *Büyük küçük tüm <s>,</s> ifadelerini alıp boşluğu çevirip return edilir.Böylece <script> kabul edilmemiş
      olur.
      $data = <SCRIPT>alert(1);</SCRPIT> --> CRIPT>alert(1);CRPIT
*/

/*
XSS Level 5

      *Büyük küçük tüm alert ifadelerini alıp boşluğu çevirip return edilir.Böylece alert kullanılmaz olur.
      olur.
      $data = <SCRIPT>alert(1);</SCRPIT> --> <SCRIPT></SCRPIT>
      $data = <Script>alert(1);</Script> --> <Script></Script>
*/

/*
XSS Level 6

      *Burada level5 ve level4 function'larını kullanıp hem script girmesine hemde alert girmesini engelledim.
      $data = <SCRIPT>alert(1);</SCRPIT> --> CRIPT>alert(1);CRPIT
      $data = <SCRIPT>alert(1);</SCRPIT> --> <SCRIPT></SCRPIT>
      Bu adımdan sonra çıktı olarakta --> CRIPT>(1);CRPIT
*/




?>
