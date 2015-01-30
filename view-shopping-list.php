<?php 

include_once 'includes/header.php';
$shoppingListID = $_GET['id'];

$sql = "SELECT shoppingListName FROM shoppingList WHERE shoppingListID='$shoppingListID';";
			$res = mysqli_query($conn, $sql) or die("<br /><br />Couldn't connect, sorry: " . mysql_error());
			while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
				$shoppingListName = $row['shoppingListName'];
			}
			mysqli_close($res);


 ?>

<div class="col-sm-3 well">
	<?php include_once 'includes/content/sidebarContent.php' ?>
</div>

<div class="col-sm-9">
	<?php echo "<h1>" . $shoppingListName . "</h1>"; ?>
	<a  id="addItemBtn">+Add Item</a>
	<div class="container" >
		<form id="addItemForm" class="form-inline" method="post" role="form" action="includes/process_new_item.php" style="display:none;">
			<div class="form-group">
		        <label class="sr-only" for="itemNameInput">Item Name</label>
		        <input type="text" class="form-control" id="itemNameInput" name="itemNameInput" placeholder="Item Name">
		    </div>
		    <div class="form-group">
		        <label class="sr-only" for="itemPriceInput">Price</label>
		        <input type="text" class="form-control" id="itemPriceInput" name="itemPriceInput" placeholder="Price">
		    </div>
		    <div class="form-group">
		        <label class="sr-only" for="itemStoreInput">Store</label>
		        <input type="text" class="form-control" id="itemStoreInput" name="itemStoreInput" placeholder="Store">
		    </div>
		    <div class="form-group">
		    	<select id="itemCount" name="itemCount" class="form-control">
					<option value='1' >1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>4</option>
					<option value='5'>5</option>
					<option value='6'>6</option>
					<option value='7'>7</option>
					<option value='8'>8</option>
					<option value='9'>9</option>
					<option value='10'>10</option>
				</select>

		    </div>
		    
		    <input type="submit" id="itemSubmitBtn" name="submit" class="btn btn-primary">Submit</input>
		</form>

	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Item</th>
				<th>Price</th>
				<th>Location</th>
				<th>Qty</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT itemShoppingListLink.itemID, itemShoppingListLink.shoppingListID, itemShoppingListLink.itemCount, item.itemName, item.price, item.store
						from item, itemShoppingListLink
						where item.itemID = itemShoppingListLink.itemID";
				$res = mysqli_query($conn, $sql) or die("<br /><br />Couldn't connect, sorry: " . mysql_error());
				while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
					if($row['shoppingListID'] == $shoppingListID){
						$itemName = $row['itemName'];
						$itemCount = $row['itemCount'];
						$price = $row['price'];
						$store = $row['store'];

						echo "<tr>
								<td>$itemName</td>
								<td>$price</td>
								<td>$store</td>
								<td>$itemCount</td>
							</tr>
							";
					}
				}
			?>
			
		</tbody>


	</table>	
</div>



<?php 

include_once 'includes/footer.php';
 ?>
 <script type="text/javascript">
	$(document).ready(function(){
		// alert('hi!');
	    var form=$("#addItemForm");

	    $('body').on('click', '#addItemBtn', function() {
                // alert('foo');
                $('#addItemForm').slideToggle();    
        });

    });
</script>
