<?php
   //Step 1. get database connection
   require('../config/database.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marketapp list users</title>
</head>
<body>
    <table border ="1" align="center">
<tr>
<td> fullname</td>
<td> E-mail</td>
 <td>ide.Number</td>
 <td>Phone Number</td>  
 <td> Status</td> 
 <td> Options</td> 
</tr>
<?php
sql_users="
//
";


?>
<tr>
<td> Camilo</td>
<td> camilo@gmail.com</td>
 <td>3333333333</td>
 <td>111111111</td>  
 <td> Active</td> 
 <td> 
<a href="#">
    <img src= "icons/lupa.png"width="20">
</a>
<a href="#">Update</a>
<a href="#">Delete</a>
 </td> 



</tr>
</table>
</body>
</html>