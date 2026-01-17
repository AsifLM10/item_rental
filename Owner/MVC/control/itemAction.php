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
if (isset($_GET["toggle"])) {
    $id = $_GET["toggle"];

    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT status FROM items WHERE id=$id"));
    $newStatus = ($row["status"] == "Available") ? "Rented" : "Available";

    mysqli_query($conn, "UPDATE items SET status='$newStatus' WHERE id=$id");
    header("Location: ../view/manageItems.php");
}

?>