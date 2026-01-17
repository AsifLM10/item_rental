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

            <form method="post" action="../control/registerAction.php"></form>
        </div>
    </body>
</html>