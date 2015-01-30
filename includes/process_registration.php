<?php 
include_once 'DBConnect.php';
echo "these are the post variables" ;
print_r($_POST);

$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$confirmpwd = mysqli_real_escape_string($conn,$_POST['confirmpwd']);





	if($password != $confirmpwd){
		echo "Your passwords didn't match!";
		return False;
	}else {
		// $sql = "INSERT INTO user
		// 		(email, password)
		// 		VALUES('$email', '$password')";
		$sql = "insert into user(email,password) values('$email', '$password');";
		$res = mysqli_query($conn, $sql) or die('<br /><br />mysqli_error:' . mysqli_error($conn). $sql."<br />this user Failed to add to database.");
		mysqli_close($res);
		

		$userID = mysqli_insert_id($conn);
		$sql = "INSERT INTO shoppingList (userID, shoppingListName) VALUES($userID, 'Default Shopping List');";
		$res = mysqli_query($conn, $sql) or die('<br /><br />mysqli_error:' . mysqli_error($conn). $sql."<br />Failed to add to database.");
		mysqli_close($res);

		$sql = "INSERT INTO wishlist (userID, wishlistName) VALUES($userID, 'Default Wishlist');";
		$res = mysqli_query($conn, $sql) or die('<br /><br />mysqli_error:' . mysqli_error($conn). $sql."<br />Failed to add to database.");
		mysqli_close($res);

		echo "You've been registered!!!";
		header('Location:../registered.php');
	}

?>