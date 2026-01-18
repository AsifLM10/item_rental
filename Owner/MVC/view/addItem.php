<?php
include("../controller/addItem.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Item</title>
    </head>
    <body>
        <h2>Add New Item</h2>
        <form method="post">
            <input type="text" name="item_name" placeholder="Item name"><br><br>

            <textarea name="description" placeholder="Item description"></textarea><br><br>

            <input type="number" name="price" placeholder="Price"><br><br>

            <button type="submit">Add Item</button>
        </form>

        <p><?php echo $message; ?></p>

        <a href="dashboard.php">Back</a>

    </body>
</html>