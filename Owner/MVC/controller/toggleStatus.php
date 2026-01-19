<?php
session_start();

include("../../../Common/MVC/database/config.php");
if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    exit();
}
if(!isset($_GET["id"])){
    exit();
}
$id = (int)$_GET["id"];
$owner = $_SESSION["username"];

$result = mysqli_query($conn,"SELECT status FROM items WHERE id=$id AND owner_username='$owner'");
$row=mysqli_fetch_assoc($result);

if(!$row){
    exit();
}

$newStatus = ($row["status"] === "available") ? "unavailable" : "available";

mysqli_query($conn,"UPDATE items SET status = '$newStatus' WHERE id=$id AND owner_username='$owner'");

echo $newStatus;
?>