<?php
//session_start();
include("../../../Common/MVC/database/config.php");

if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}

$id=(int)$_GET["id"];
$owner = $_SESSION["username"];
$img= mysqli_query($conn,"SELECT image FROM items WHERE id=$id AND owner_username='$owner'");

if($row=mysqli_fetch_assoc($img)){
    if(!empty($row["image"])){
        $imgPath = $_SERVER["DOCUMENT_ROOT"] . "/item_rental/uploads" . $row["image"];
        if(file_exists($imgPath)){
        unlink($imgPath);
        }
    }
}


mysqli_query($conn, "DELETE FROM items WHERE id=$id AND owner_username='$owner'");

header("Location: ../view/manageItems.php");
exit();

?>