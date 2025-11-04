<?php
  //Step 1. get database connection
   require('../config/database.php');
   
   //crete session 
   session_start();
   if(isset($_SESSION[ 'session_user_id'])){
     header('refresh:0; url =main.php');
   }else{
    header('refresh:0; url =Error_403.html');
   }

   //Step 2. get form-data
   $e_mail =trim($_POST['email']);
   $p_wd = trim($_POST['passwd']);


 //    $enc_pass=password_hash($p_wd, PASSWORD_DEFAULT);
 $enc_pass=md5($p_wd);

   //paso 3.  query validar los datos

$sql_chenk_user= " 
select 
u.id,
u.firstname || ' ' ||u.lastname as fullname,
 u.email,
 u.password
from 
users u
where 
 u.email='$e_mail' and
 u.password='$enc_pass'
limit 1

";
$res_check=pg_query($local_connection, $sql_chenk_user);

$row =pg_fetch_assoc($res_check)
$_SESSION['session_user_id']=$row['id'];
$_SESSION['session_user_fullname']=$row['fullname'];
  if(pg_num_rows($res_check)>0){
     // echo" user exists.Go to main page !!";+
 header('refresh:0; url =main.php');

  }else{
    echo "verify data";
  }