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

<center><form name="edit-user-form" action = "update_user.php" method = "post">   
        <input 
            type="hidden"
            name="iduser" 
            value="<?php echo $user_id ?>"
            readonly>
        <labelasd>Identification number: </label>
        <input 
            type="text" 
            name="idenumber" aa
            value="<?php echo $ide_number ?>"
            readonlyaaa
            required /><br><br>
        <label>Firstname: </label>
        <input 
            type="text" 
            name="fname" 
            value="<?php echo $fname ?>"
            required /><br><br>
        <label>Lastname: </label>
        <input 
            type="text" 
            name="lname" 
            value="<?php echo $lname ?>"
            required /><br><br>
          <label> User photo<label><br> <imput type="file" name ="photo_user"><br>
        <button>Update user</button>
    </form></form> 





</body>
</html>