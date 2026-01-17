<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Item Rental Management System</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/dom.js"></script>
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class="top">
            <h1>Item Rental Management System</h1>
            <p>Manage and rent items easily with a simple and secure platform.</p>

            <?php
            if(!isset($_SESSION["username"])){
                echo "<a href='login.php' class='btn'>Get Started</a>";
            }
            ?>
        </div>

        <div class="section">
            <h2>Why Choose Us?</h2>
            <div class="cards">
                <div class="card">Easy Item Management</div>
                <div class="card">Secure Login System</div>
            </div>
        </div>

        <div class="section gray">
            <h2> How It Works</h2>
            <p>Register -> Login -> Manage or Rent Items</p>
        </div>

        <div class="section">
            <h2 id="modeText">Light Mode</h2>
            <button onclick="toggleMode()">Switch Mode</button>
        </div>

        <div class="footer">
            © 2025 Item Rental Management System
        </div>
    </body>

</html>