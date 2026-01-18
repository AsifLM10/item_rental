<?php
session_start();
include "../../../Common/MVC/controller/manageItems.php";

$owner = $_SESSION["username"];
$result = mysqli_query($conn,"SELECT * FROM items WHERE owner_username='$owner'");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Items</title>
        <link rel="stylesheet" href="../stylesheets/manageItems.css">
    </head>
    <body>

    <a href="dashboard.php" class="home-btn">Dashboard</a>

    <h2 class="title">Manage Your Items</h2>
    <div class="container">
        
    </div>

    </body>
</html>