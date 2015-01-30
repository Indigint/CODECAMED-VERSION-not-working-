<a href="../../newlist.php" class="text-right" id="newShoppingList">+New Shopping List</a>
<h5>Shopping Lists</h5>
	<ul class="list-unstyled">	
		<?php
			$userID = $_COOKIE['userID'];
			$sql = "SELECT * FROM shoppingList WHERE userID='$userID';";
			$res = mysqli_query($conn, $sql) or die("<br /><br />Couldn't connect, sorry: " . mysql_error());
			while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
				$shoppingListName = $row['shoppingListName'];
				$shoppingListID = $row['shoppingListID'];
				echo "<li><a href='view-shopping-list.php?id=$shoppingListID'>$shoppingListName</a></li>";
			}
			mysqli_close($res);
		?>
	</ul>

<h5>Wish Lists</h5>
	<ul class="list-unstyled">	
		<?php 
			$sql = "SELECT * FROM wishlist WHERE userID='$userID';";
			$res = mysqli_query($conn, $sql) or die("<br /><br />Couldn't connect, sorry: " . mysql_error());
			while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
				$wishlistName = $row['wishlistName'];
				echo "<li><a href=''>$wishlistName</a></li>";
			}
			mysqli_close($res);



		 ?>
	</ul>