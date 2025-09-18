<?php
  //Step 1. get database connection
   require('../config/database.php');

   //Step 2. get form-data
   $e_mail = $_POST['email'];
   $p_wd = $_POST['passwd'];

   //paso 3.  query validar los datos

$sql_chenk_user= " 
select 
 u.email,
 u.password
from 
users u
where 
 u.email='$e_mail' and
 u.password='$p_wd'
limit 1

";
$res_check=pg_query($connection, $sql_chenk_user);
  if(pg_num_rows($res_check)>0){
      echo" user exists.Go to main page !!";
  }else{
    echo"verify data";
  }