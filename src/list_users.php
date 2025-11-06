<?php
   //Step 1. get database connection
   require('../config/database.php');
      session_start();
   if(isset($_SESSION[ 'session_user_id'])){
     header('refresh:0; url =main.php');
   }else{
    header('refresh:0; url =Error_403.html');
   }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>marketapp list users</title>

</head>
<body>
    <div class="container mt-3">
    <table border ="1" align="center" class="table">
<tr>
<td> fullname</td>
<td> E-mail</td>
 <td>ide.Number</td>
 <td>Phone Number</td>  
 <td> Status</td> 
 <td> Options</td> 
</tr>
<?php
$sql_users="
select 
u.id as user_id,
u.firstname|| ' ' ||u.lastname as fullname,
u.email,
u.ide_number,
u.mobile_number,
case 
	when u.status =true then 'Active'else 'Inactive'
	end as status
from users u 
";
$resul=pg_query($local_connection,$sql_users);
if(!$resul){
    die("ERROR".pg_last_error());
}
while($row =pg_fetch_assoc($resul)){
  echo"
  <tr>
<td>".$row['fullname']."</td>
<td> ".$row['email']."</td>
 <td>".$row['ide_number']."</td>
 <td>".$row['mobile_number']."</td>  
 <td>".$row['status']."</td> 
 <td> 
<a href='#'><img src= 'icons/lupa.png'width='20'></a>
<a href='delete_users.php?userId=".$row['user_id']."'><img src= 'icons/eliminar.png'width='20'></a>
<a href ='edit_user_form.php?userId=".$row['user_id']."'><img src= 'icons/update.jpg'width='20'></a>
 </td> 
</tr> 
  " ; 
}

?>

</table>
</body>
</html>