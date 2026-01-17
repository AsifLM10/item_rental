<?php
session_start();
include "../../../Common/MVC/database/config.php";

$owner = $_SESSION["username"];
$result = mysqli_query($conn,"SELECT * FROM items WHERE owner_username='$owner'");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Items</title>
        <link rel="stylesheet" href="../../../Common/MVC/css/style.css">
    </head>
    <body>
        
    </body>
</html>