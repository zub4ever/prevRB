<?php
$host = "172.16.0.52";
$db   = "sisap_web";
$user = "rbprev";
$pass = "rbprev2016";

$con = mysqli_connect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_select_db($con, $db);

?>
