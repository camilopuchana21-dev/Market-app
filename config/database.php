<?php
//database connection
$host ="localhost";
$user="postgres";
$dbname="marketapp";
$password="unicesmag";
$port= "5432";


$data_connection="
host=$host
user=$user
password=$password
dbname=$dbname
port=$port
";
$connection=Pg_connect($data_connection);
if(!$connection){
    echo"error";
}
else{
echo"connetion suces";
}

?>