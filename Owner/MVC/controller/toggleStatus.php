<?php
//session_start();
if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    exit();
}

$id = (int)$_GET["id"];
$owner = $_SESSION["username"];

$result = mysqli_query($conn,"SELECT status FROM items WHERE id=$id AND owner_username='$owner'");
?>