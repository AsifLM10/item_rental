<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Item Rental Management System</title>
        <link rel="stylesheet" href="../stylesheets/home.css">
        <script src="../js/dom.js"></script>
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class="box">
            <h1>🛒 EasyRent</h1>
            <p>Rent items easily and securely</p>

            <?php if(!isset($_SESSION["username"])): ?>
                <p><b>Welcome <?php echo $_SESSION["username"]; ?></b></p>
                <a href="../../../<?php echo ($_SESSION["role"] === 'owner') ? 'Owner/MVC/view/dashboard.php' : 'Renter/view/dashboard.php'; ?>">
                    Go to Dashboard
            </a>
            <a href="../controller/logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="signup.php">Sign Up</a>
                
            
    
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