<?php
   //Step 1. get database connection
   require('../config/database.php');

   //Step 2. get form-data
   $cou_name = trim($_POST['couname']);
   $cou_abbre=trim( $_POST['couabbre']);
   $id_cou = trim($_POST['idcou']);
   

 // $enc_pass=password_hash($p_wd, PASSWORD_DEFAULT);
 /*$enc_pass=md5($p_wd);

   $check_email="
      select
         email 
      from 
         users
      where 
         email='$e_mail' or ide_number ='$id_number' 
      limit 1"
   ;*/

   $res_check = pg_query($supa_connection );
   

   if(pg_num_rows($res_check)>0){
      echo"<script>alert('User alredy exists !!')</script>";+
      header('refresh:0; url =signin.html');
   }else{
      //Step 3.
      $query = "
      INSERT INTO users (
        id-conuntri,
         Name_countri,
          Abbre,
         )
         values (
           '$id_cou',
    '$cou_name',
    '$cou_abbre'
           
      )";

      //Step 4.
      $res = pg_query($supa_connection, $query);

      //Step 5. Validation
      if($res){
         //echo "User has been created successfully !!!";
         echo "<script>alert('Succes !!!Go to login')</script>";+
         header('refresh:0; url =signin.html');
      } else {
         echo "Something wrong";
      }
   }
?>
