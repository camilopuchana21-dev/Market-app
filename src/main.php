<?php

  session_start();
   if(isset($_SESSION[ 'session_user_id'])){
     header('refresh:0; url =signin.php');
   }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type"image/png" href="icons/market_main.png"/>

    <title>Marketapp - home </title>
    
</head>
<body>
  <table>



   <table border= "0" align ="center">
    <tr>
    <b>User: </b>
    <td><?php echo $_SESSION['session_user_fullname']; ?>
    <td><?php echo "<img src='" .$_SESSION['session_user_url_photho']."' width='30'>";?></td>
    
</td>
    </tr>
</table>
    
    <a href="longout.php"> longout</a> |
    <a href="list_users.php"> list all users</a> 
</body>
</html>