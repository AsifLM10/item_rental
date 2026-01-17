<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/validation.js"></script>
    </head>
    <body>
        <?php include "header.php"; ?>
        <div class="form-box">
            <h2>Login</h2>

            <form method="post" action="../control/loginAction.php" onsubmit="return loginValidate()">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="submit" value="Login" class="btn">
            </form>
            <p id="error" class="error"></p>
        </div>
    </body>
</html>