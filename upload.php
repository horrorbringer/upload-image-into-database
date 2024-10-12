<?php
include_once("connect.php");
if($_POST["submit"]){
    $fullName = $_POST["fullname"];
    $fileName = $_FILES["image"]["name"];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpg","jpeg","png","gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "./uploads/".$fileName;
    if(in_array($ext,$allowedTypes)){
        if(move_uploaded_file($tempName,$targetPath)){
            $query = "INSERT INTO Images (image_name,file_name) VALUE ('$fullName','$fileName')";
            if(mysqli_query($conn,$query)){
                echo "Your image is inserted";
                header("Location: ./index.php");
            }else {
                echo "Can't insert this image";
            }
        }else{
            echo "File is not uploaded";
        }
    }else{
        echo "Your file are not allowed";
    }
}
?>