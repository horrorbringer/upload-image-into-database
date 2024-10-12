<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPasswrod = "";
$dbName = "upload_image";

$conn = mysqli_connect($dbHost,$dbUser,$dbPasswrod,$dbName);
if(!$conn){
    die("Something Wrong");
}else
?>