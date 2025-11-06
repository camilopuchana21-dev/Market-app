<?php
//star or continue with session
session_start();
//destroy curren session
session_destroy();
//redirect to login form
 header('refresh:0; url =singnin.php');

?>