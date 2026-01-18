<?php
if(session_start() === PHP_SESSION_NONE) {
    session_start();
}
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
    $owner=$_SESSION["username"];
    $status="available";
    $imageDBName=null;

    if(!empty($_FILES["image"]["name"])){
    $imageName=$_FILES["image"]["name"];
    $tmpName=$_FILES["image"]["tmp_name"];

    $uploadDir = "../../../uploads/";
    $imageDBName=time() . "_" . basename($imageName);
    $uploadPath=$uploadDir . $imageDBName;

    if(!move_uploaded_file($tmpName, $uploadPath)){
        $imageDBName=null;
    }
    }
    if($name && $description && $price > 0){
        $sql = "INSERT INTO items(item_name,description,image,price,status,owner_username) VALUES('$name','$description','$imageDBName','$price','$status','$owner')";

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