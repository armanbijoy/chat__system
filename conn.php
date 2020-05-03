<?php
 
 $host = "sql12.freemysqlhosting.net";
 $user = "sql12337349";
 $pass = "urFAZ57WjZ";
 $db ="sql12337349";
//MySQLi Procedural
$conn = mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>