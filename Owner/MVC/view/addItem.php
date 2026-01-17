<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Item</title>
        <link rel="stylesheet" href="../../../Common/MVC/css/style.css">
    </head>
    <body>
        <?php include "../../../Common/MVC/view/header.php"; ?>
        
    </body>
</html>