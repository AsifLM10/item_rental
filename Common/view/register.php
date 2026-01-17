<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class="form-box">
            <h2>Register</h2>

            <form method="post" action="../control/registerAction.php">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">

                <select name="role">
                    <option value="">Select role</option>
                    <option value="owner">Owner</option>
                    <option value="renter">Renter</option>
                </select>

                
            </form>
        </div>
    </body>
</html>