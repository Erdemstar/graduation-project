<?php

  class FileUpload{

    function __construct(){
      include ("General_Function.php");
      $general = new General();
      $general->startSes();
      $general->isnotLogined();
    }

    function level1(){
      $target_dir = "../../Frontend/include/uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
          echo "Dosya upload edildi.Görüntülemek için ";
          echo '<a href='."$target_file".'>Tıklayın</a>';
        }
        else {
         echo "Dosya upload edildiği sırada bir hata oluştu.";
         }
      }

    }

    function level2(){
      $target_dir = "../../Frontend/include/uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $valid_mime_types = array("image/gif","image/png","image/jpeg","image/pjpeg",);
      // Check if image file is a actual image or fake image
      $status = "0";
      if (in_array($_FILES['fileToUpload']['type'], $valid_mime_types)){
        $status = "1";
      }
      if(isset($_POST["submit"]) && $status == "1" ) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
          echo "Dosya upload edildi.Görüntülemek için ";
          echo '<a href='."$target_file".'>Tıklayın</a>';
        }
        else {
         echo "Dosya upload edildiği sırada bir hata oluştu.";
         }
      }
      else {
       echo "Dosya upload edildiği sırada bir hata oluştu.";
       }

    }

    function level3(){
      $target_dir = "../../Frontend/include/uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $valid_mime_types = array("image/gif","image/png","image/jpg","image/jpeg","image/pjpeg",);
      $valid_image_name = array("gif","png","jpg","jpeg","pjpeg",);
      // Check if image file is a actual image or fake image
      $status = "0";
      if (in_array($_FILES['fileToUpload']['type'], $valid_mime_types)){
        foreach ($valid_image_name as $key => $value) {
          $get_loc = strpos($_FILES["fileToUpload"]["name"],$value);
          if ($get_loc > 0){
            $status = "1";
          }
        }
      }
      if(isset($_POST["submit"]) && $status == "1" ) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
          echo "Dosya upload edildi.Görüntülemek için ";
          echo '<a href='."$target_file".'>Tıklayın</a>';
        }
        else {
         echo "Dosya upload edildiği sırada bir hata oluştu.";
         }
      }
      else {
       echo "Dosya upload edildiği sırada bir hata oluştu.";
       }


    }

    function level4(){
      $target_dir = "../../Frontend/include/uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $valid_mime_types = array("image/gif","image/png","image/jpg","image/jpeg","image/pjpeg",);
      $valid_image_name = array("gif","png","jpg","jpeg","pjpeg",);
      // Check if image file is a actual image or fake image
      $status = "0";
      if (in_array($_FILES['fileToUpload']['type'], $valid_mime_types)){
        foreach ($valid_image_name as $key => $value) {
          $get_loc = strpos($imageFileType,$value);
          if ($get_loc > 0){
            $status = "1";
          }
        }
      }
      if(isset($_POST["submit"]) && $status == "1" ) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
          echo "Dosya upload edildi.Görüntülemek için ";
          echo '<a href='."$target_file".'>Tıklayın</a>';
        }
        else {
         echo "Dosya upload edildiği sırada bir hata oluştu.";
         }
      }
      else {
       echo "Dosya upload edildiği sırada bir hata oluştu.";
       }


    }

  }


/*

  level1
    *Burada kullanıcıdan türüne bakılmaksınız dosya alıp "Frontend/include/uploads/" dizini içersine
    upload ediliyor

  level2
    *Burada kullanıcıdan bir dosya alınıyor.Alınan dosyanın fotoğraf olup olmadığı "$valid_mime_types"
    üzerinden kontrol edliyor

  level3
    *Burada kullanıcıdan bir dosya alınıyor.Alınan dosyanın fotoğraf olup olmadığı ""$valid_mime_types"
    üzerinden kontrol ediliyor ayrıca dosya adının içersinde "$valid_image_name" bu arraydaki indislerden
    biri olup olmadığı kontrolünün yapılıypr

  level4
    *Burada level3 gibi birşey yapacağım fakat "$valid_image_name" ile dosyanın uzantısının en son "." dan
    sonra olup olmadığının kontrolünü yapacağım.
*/


?>
