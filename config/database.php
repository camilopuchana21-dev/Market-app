<?php
//database connection to Supabase
$supa_host ="aws-1-us-east-1.pooler.supabase.com";
$supa_user="postgres.ahhgmvlyctappmxznepb";
$supa_dbname="postgres";
$supa_password="UNICESMAG@@";
$supa_port= "6543";


//database connection
$local_host ="localhost";
$local_user="postgres";
$local_dbname="marketapp";
$local_password="unicesmag";
$local_port= "5432";


$supa_data_connection="
host=$supa_host
user=$supa_user
password=$supa_password
dbname=$supa_dbname
port=$supa_port
";



$local_data_connection="
host=$local_host
user=$local_user
password=$local_password
dbname=$local_dbname
port=$local_port
";
$supa_connection=Pg_connect($supa_data_connection);
$local_connection=Pg_connect($local_data_connection);
if(!$supa_connection){
    //echo"error";
}
else{
echo"connetion suces";
}

if(!$local_connection){
    echo"error";
}
else{
echo"connetion suces";
}

?>