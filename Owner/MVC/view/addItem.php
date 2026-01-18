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
        <link rel="stylesheet" href="../stylesheets/addItem.css">
    </head>
    <body>
        <a href="dashboard.php" class="home-btn">Dashboard</a>
        <div class="form-container">
        <h2>Add New Item</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Item name" required><br><br>

            <textarea name="description" placeholder="Item description" required></textarea><br><br>

            <input type="file" name="image">
            
            <input type="number" name="price" placeholder="Price" required><br><br>

            <button type="submit">Add Item</button>
        </form>

        <a href="dashboard.php" class="back-link">Go Back</a>
        </div>
    </body>
</html>