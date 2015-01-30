<?php 
		session_start();
		session_destroy();
        setcookie("email", "", time()-36000);
        setcookie("userID","", time()-36000);
        header('Location: index.php');

 ?>