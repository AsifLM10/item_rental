<?php
//session_start();
include("../../../Common/MVC/database/config.php");

if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}

$message = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name=trim($_POST["name"]);
    $description = trim($_POST["description"]);
    $price = (int)$_POST["price"];

    if($name && $description && $quantity > 0){
        $owner=$_SESSION["username"];
        $status = "available";
        $sql = "INSERT INTO items(item_name,description,price,status,owner_username) VALUES('$name','$description','$price','$status','$owner')";

        if(mysqli_query($conn,$sql)){
            $message="Item added successfully!";
        } 
        else{
            $message = "Error";
        }
    }
    else{
        $message = "All fields are required";
    }

}
?>