<?php
    include_once 'includes/header.php';
    ?>

<form role="form">
    <div class="form-group">
        <label for="type">item type:</label>
            <input type="text" class="form-control" id="type" placeholder="type">
    </div>
    <div class="form-group">
        <label for="item name">item name:</label>
            <input type="text" class="form-control" id="item name" placeholder="item">
    </div>
    <div class="form-group">
<label for="item price">item price:</label>
            <input type="number" class="form-control" id="item price" placeholder="price">
    </div>
    <div class="form-group">
        <label for="store name">store name:</label>
            <input type="text" class="form-control" id="store name" placeholder="store">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php
    include_once 'footer.php';
    ?>