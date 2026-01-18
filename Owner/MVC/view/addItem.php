<?php
include("../controller/addItem.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Item</title>
        <link rel="stylesheet" href="../../../Common/MVC/css/style.css">
    </head>
    <body>
        <?php include "../../../Common/MVC/view/header.php"; ?>

        <div class="form-box">
            <h2>Add Item</h2>

            <form method="post" action="../control/itemAction.php">
                <input type="text" name="item_name" placeholder="Item Name">
                <input type="number" name="price" placeholder="Price">
                <input type="hidden" name="action" value="add">
                <input type="submit" class="btn" value="Add Item">
            </form>
        </div>
    </body>
</html>