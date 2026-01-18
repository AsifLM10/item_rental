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
                <?php endif; ?>
            <hr>

    <img src="../../Renter/images/home.jpg" class="home-img" alt="Home Image">

    <p>
        EasyRent is a simple rental marketplace where users can browse, book,
        and manage rental items easily.
    </p>

    <hr>

    <h3>How It Works</h3>
    <p>Register → Login → Manage or Rent Items</p>

    <h3 id="modeText">Light Mode</h3>
    <button onclick="toggleMode()">Switch Mode</button>

    <p style="margin-top:15px;">
        © 2025 Item Rental Management System
    </p>

</div>

<script>
function toggleMode() {
    var body = document.body;
    var text = document.getElementById("modeText");

    if (body.style.backgroundColor === "black") {
        body.style.backgroundColor = "";
        body.style.color = "white";
        text.innerHTML = "Light Mode";
    } else {
        body.style.backgroundColor = "black";
        body.style.color = "white";
        text.innerHTML = "Dark Mode";
    }
}
</script>
    </body>

</html>