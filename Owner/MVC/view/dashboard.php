<?php
session_start();
if(!isset($_SESSION["username"]) || $_SESSION["role"] != "owner"){
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Owner Dashboard</title>
        <link rel="stylesheet" href="../../../Common/MVC/css/style.css">
    </head>
    <body>
        <?php include "../../../Common/MVC/view/header.php"; ?>

        <div class="section">
            <h2>Owner Dashboard</h2>
            <p>Welcome <?php echo $_SESSION["username"]; ?></p>
        </div>
    </body>
</html>