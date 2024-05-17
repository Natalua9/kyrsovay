
<?php
require_once "../database/User.php";
session_start();

$user = new User();
$result = $user->signup($_POST["surname"], $_POST["name"], $_POST["patronymic"], $_POST["city"],
$_POST["polis"], $_POST["passpost"],$_POST["date"], $_POST["email"], $_POST["password"]);
if (!isset($result["error_valid"])) {
    header("Location:/personal-cab.php");
}else{
$_SESSION["error_valid"] = $result["error_valid_text"];
header("Location:/");

}
?> 
