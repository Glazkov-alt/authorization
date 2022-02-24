<?php 
include 'db.php';
    $Nickname = $_POST["Nickname"];
    $Description = $_POST["Description"];
    $name = $_FILES["fale"]["name"];
    $id = $_SESSION["user"];
    move_uploaded_file($_FILES["fale"]["tmp_name"], $name);
        
        $querys = "INSERT INTO `applications`(`Nickname`, `Description`, `Photo`, `user_id`) VALUES ('$Nickname','$Description','$name','$id')";
        
        $link->query($querys) or dir( $link->error);
        $link->close();
        header("location:/");