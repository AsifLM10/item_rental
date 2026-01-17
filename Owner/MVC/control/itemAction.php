<?php
session_start();
include "../../../Common/MVC/database/config.php";

$action = $_POST["action"] ?? "";

if($action == "add"){
    $item = $_POST["item_name"];
    $price = $_POST["price"];
    $owner = $_SESSION["username"];

    if(empty($item) || empty($price)){
        echo "ALl fields required";
        exit();
    }

    $sql = "INSERT INTO items(item_name, price, status, owner_username) VALUES ('$item','$price','Available','$owner')";

    mysqli_query($conn, $sql);
    header("Location: ../view/manageItems.php");
}
?>