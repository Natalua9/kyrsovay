<?php
include "connect.php";
$email=trim($_POST['email']);
$password=trim($_POST['password']);
$date=trim($_POST['date']);
$polis=trim($_POST['polis']);
$name=trim($_POST['name']);
 
if(mysqli_num_rows(mysqli_query($con, "SELECT * FROM Users WHERE email_user='$email' AND password='$password'")) == 0){
    $query=mysqli_query($con, "INSERT INTO `Users`( `email_user`, `userName`, `policy`, `dateBirth` , `password`)
 VALUES ('$email','$name','$polis','$date', '$password')");
 echo "<script>alert('');location.href = 'personal-cab.php';
     </script>";
   } else {
     echo "<script>alert('Пользователь с таким email и паролем уже существует');location.href = 'index.php';</script>";
   }
?>