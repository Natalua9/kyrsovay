<?php
session_start();
if(isset($_SESSION["user_role"])){
    unset($_SESSION["user_role"]);
    unset($_SESSION["user_id"]);
    unset($_SESSION["user_name"]); 
}
header('Location: index.php');
exit;