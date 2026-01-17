<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}
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
                
            </form>
        </div>
    </body>
</html>