<?php
session_start();
if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}
include("../controller/addItem.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Item</title>
        <link rel="stylesheet" href="../stylesheets/addItems.css">
    </head>
    <body>
        <a href="dashboard.php" class="home-btn">Dashboard</a>
        <div class="form-container">
        <h2>Add New Item</h2>
        <form method="post">
            <input type="text" name="item_name" placeholder="Item name"><br><br>

            <textarea name="description" placeholder="Item description"></textarea><br><br>

            <input type="number" name="price" placeholder="Price"><br><br>

            <button type="submit">Add Item</button>
        </form>

        <a href="dashboard.php" class="back-link">Go Back</a>
        </div>
    </body>
</html>