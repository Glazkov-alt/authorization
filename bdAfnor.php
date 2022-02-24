<?php
include "db.php";
$login = $_POST["login"];
$password = $_POST["password"];
$qerti = "SELECT * FROM `users` WHERE  `login`='$login' AND `password` = $password";

$res = $link->query($qerti);
if($res->num_rows ==0){
    $mess = ["states" => "error"];
}
else{
    $mess = ["states" => "ok"];
}

   echo json_encode($mess);