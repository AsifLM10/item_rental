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
    </body>

</html>