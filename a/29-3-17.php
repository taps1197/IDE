<?php
// header("Allow-Control-Allow-Origin:*");
   if(isset($_FILES['cpp'])){
      $errors= array();
      $file_size = $_FILES['cpp']['size'];
      $file_name = $_FILES['cpp']['name'];
      $file_tmp = $_FILES['cpp']['tmp_name'];
      $file_type = $_FILES['cpp']['type'];
      $file_ext=@strtolower(end(explode('.',$_FILES['cpp']['name'])));

      $expensions= array(".cpp",".c",".txt");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a .c file.";
      }

      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"cpp/".$file_name);
         echo "Success";
         var $
      }else{
         print_r($errors);
      }
   }
?>
