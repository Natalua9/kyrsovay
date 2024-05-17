<?php
require_once "../database/User.php";
session_start();
$user = new User();

$result = $user->signin($_POST["email"],$_POST["password"] );

if(!isset($result["error_valid"])){
    
    $_SESSION["user_role"]=$result["role"];
    $_SESSION["user_id"]=$result["id_user"];
    $_SESSION["user_name"] = $result["name"]; 


    if($result["role"] == "admin"){
        header('Location:/admin\managing-direction.php');
        die();
    }
    header('Location:/personal-cab.php');
}
?> 