<?php
session_start();
include "../../../Common/MVC/database/config.php";

if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}

$owner = $_SESSION["username"];
$total = 0;
$rows = [];

$itemResult = mysqli_query($conn,"SELECT id, item_name, price FROM items WHERE owner_username='$owner'");
?>