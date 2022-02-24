<?php
include "db.php";

    $login = $_POST["logun"];
    $password = $_POST["password"];
    $qerti = "SELECT * FROM `users` WHERE  `login`='$login' AND `password` = $password";
    if($result = $link->query($qerti)){
        foreach($result as $row){
    $_SESSION["user"]=$row["id"];
    echo $_SESSION["user"];
        }
    }
    header("location: /");
