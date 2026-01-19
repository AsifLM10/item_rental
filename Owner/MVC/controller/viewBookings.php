<?php
session_start();
include("../../../Common/MVC/database/config.php");

if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}

$owner = $_SESSION["username"];

$sql = "SELECT * FROM rental_requests WHERE item_id IN (SELECT id FROM items WHERE owner_username = '$owner')";

$result = mysqli_query($conn,$sql);

$bookings = [];
$itemResult = mysqli_query($conn,"SELECT id, item_price, price, FROM items WHERE owner_username='$owner'");

while( $item = mysqli_fetch_assoc($itemResult)){
    $itemId = $item["id"];
    $reqResult = mysqli_query($conn,"SELECT * FROM rental_reqquests WHERE item_id=$itemod");

    
}
?>