<?php

   //Step 1. get database connection
   require('../config/database.php');
   //step 2.get data or params
   $user_id = $_GET['userId'];
   //step3. preparate querry
   $sql_delete_users="delete from users where id=$user_id";
    //step 4. execute querry
   $resul=pg_query($local_connection,$sql_delete_users);
    if(!$resul){
        die("ERROR".pg_last_error());
    }
    else{
        echo"<script>alert('user has been delete!')</script>";
        header('refresh:0;url=list_users.php');


}
















?>