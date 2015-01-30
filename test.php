<?php 

	include_once 'DBConnect.php';

	$sql = "INSERT INTO shoppingList(shoppingListID,userID,shoppingListName) VALUES(1,2,'electronics');";
	$res = mysqli_query($conn, $sql) or die('<br /><br />mysqli_error:' . mysqli_error($conn). $sql."<br />Failed to add to database.");

	echo "<br /><br />Successful?"

 ?>