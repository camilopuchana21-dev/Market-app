<?php
   //Step 1. get database connection
   require('../config/database.php');

   //Step 2. get form-data
   $l_name = trim($_POST['lname']);
   $f_name =trim( $_POST['fname']);
   $m_number =trim( $_POST['mnumber']);
   $id_number = trim($_POST['idnumber']);
   $e_mail = trim($_POST['email']);
   $p_wd = trim($_POST['passwd']);

 // $enc_pass=password_hash($p_wd, PASSWORD_DEFAULT);
 $enc_pass=md5($p_wd);

   $check_email="
      select
         email 
      from 
         users
      where 
         email='$e_mail' or ide_number ='$id_number' 
      limit 1"
   ;

   $res_check = pg_query($local_connection,$check_email );
   

   if(pg_num_rows($res_check)>0){
      echo"<script>alert('User alredy exists !!')</script>";+
      header('refresh:0; url =signin.html');
   }else{
      //Step 3.
      $query = "
      INSERT INTO users (
         firstname,
         lastname,
         mobile_number,
         ide_number,
         email,
         password)
         values (
            '$f_name',
            '$l_name',
            '$m_number',
            '$id_number',
            '$e_mail',
            '$enc_pass'
      )";

      //Step 4.
      $res = pg_query($local_connection, $query);

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