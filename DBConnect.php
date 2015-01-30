<?php 
$db_password = 'indigint1234';
$db_username = 'indigint';
$db = 'indigint';
$host = 'localhost';
$conn = mysqli_connect($host, $db_username, $db_password, $db) or die ("Unable to connect to the stinking database. User: $db_username, Password: $db_password."  );
// if($conn){
	 echo '<br /><br /> Connection Successful<br /><br />';
// }

 ?>