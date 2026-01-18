<?php
session_start();

include("../controller/dashboard.php");

if(!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner"){
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Owner Dashboard</title>
        <link rel="stylesheet" href="../stylesheets/dashboard.css">
    </head>
    <body>
        <a href="../../../Common/MVC/view/home.php" class="home-btn">Home</a>

        <div class="title">
            <h2>Owner Dashboard</h2>
            <p>Welcome <?php echo $_SESSION["username"]; ?></p>
            <a class="btn" href="addItem.php">Add Item</a>
            <a class="btn" href="manageItems.php">Manage Items</a>
        </div>
    </body>
</html>