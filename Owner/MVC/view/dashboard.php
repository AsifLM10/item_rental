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
            <p>Manage your rental items</p>
        </div>

        <div class="header">
            Welcome <?php echo $displayName; ?>
        </div>

        <div class="container">
            <a href="addItem.php" class="a">
            <div class="card">
                <div class="icon">➕</div>
                <h3>Add Item</h3>
                <p>Post a new item for rent</p>
            </div>
            </a>

            <a href="manageItem.php" class="a">
            <div class="card">
                <div class="icon">📦</div>
                <h3>Manage Items</h3>
                <p>Edit or remove your items</p>
            </div>
            </a>

            <a href="viewBookings.php" class="a">
            <div class="card">
                <div class="icon">📑</div>
                <h3>View Bookings</h3>
                <p>See who booked your items</p>
            </div>
            </a>

            <a href="earnings.php" class="a">
            <div class="card">
                <div class="icon">💰</div>
                <h3>Earnings</h3>
                <p>Track your rental income</p>
            </div>
            </a>
            
            <a href="profile.php" class="a">
            <div class="card">
                <div class="icon">👤</div>
                <h3>Profile</h3>
                <p>Edit your account details</p>
            </div>
            </a>
        </div>

        <a href="../controller/logout.php" class="logout-btn">Logout</a>
    </body>
</html>