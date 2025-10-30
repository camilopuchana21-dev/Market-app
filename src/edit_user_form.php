<?php
   //Step 1. get database connection
   require('../config/database.php');
    $user_id = $_GET['userId'];

    $sql_get_user="select * from users where id =$user_id";
    $resul=pg_query($local_connection,$sql_get_user);
     if(!$resul){
        die("ERROR".pg_last_error());
    }
    while ($row=pg_fetch_assoc($resul)){
$ide_number=$row['ide_number'];
$fname=$row['firstname'];
$lname=$row['lastname'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form name="edit_user_form" aciton ="update_data.php" method="post">
   <tr><td><label>ide_number</label><tr><td>
<tr><td><input type="text" name= "ide_numbe" value="<?php echo "$ide_number" ?>" readonly required/> <tr><td> 
    <tr><td><input type="text" name= "ide" value="<?php echo "  $user_id" ?>" readonly required/> <tr><td> 
<tr><td><label>firstname</label><tr><td>
<tr><td><input type="text" name= "fname" value="<?php echo "$fname" ?>" required/><tr><td>
<tr><td><label>last name</label><tr><td>
<tr><td><input type="text" name= "lname" value="<?php echo "$lname" ?>" required/><tr><td>

 <tr><td><button>update</button> </td></tr>

 
</form>   






</body>
</html>