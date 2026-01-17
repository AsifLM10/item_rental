<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "item_rental";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if(!$conn){
    die("Database Connection Failed!");
}
?>