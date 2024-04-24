<?php
include "../connect.php";
$name=$_POST['name'];
$images=$_POST['images'];
$specialization=$_POST['specialization'];
$phone=$_POST['phone'];

$query= mysqli_query($con, "INSERT INTO `doctor`(`id_doctor`, `id_office`, `$specialization`, `name_boctor`) 
VALUES ('[value-1]','[value-2]','[value-3]','$name')");
 echo "<script>alert('Доктор добавлен в бд');location.href = 'adding-direction.php';
 </script>";

?>