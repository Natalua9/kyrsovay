<?php
 include "../database/connect.php";
 include "header-admin.php";
 include "direction.php";

 $errors = '';
 $suc = '';
if(isset($_POST['button-adding'])){
    $name = $_POST['name'];
    $information = $_POST['information'];
    $img = $_FILES['images'];
    if(move_uploaded_file($img['tmp_name'], 'images/'.$img['name'])){
       // echo '<p align="center">Файл успешно загружен!</p>';
    }else{
        $errors .= "<script>alert('произошла ошибка!')</script>";
    }
    $im = 'images/'.$img['name'];
    $d = new Direction($name, $im, $information);
    if($d->saveData()){
        $suc .= "<script>alert('Данные успешно добавлены!')</script>";
    }else{
        $errors .=   "<script>alert('произошла ошибка!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style-adding.css">
    <title>Добавление направление</title>
</head>
<body>
    <div class="container">
    <?php 
                if($errors != ''){
                    echo "<p align='center' style='color: red'>$errors</p>";
                }
            ?>
             <?php 
                if($suc != ''){
                    echo "<p align='center' style='color: green'>$suc</p>";
                }
            ?>
        <div class="bloc-main">
          
            <form  method="post" class="form-adding" enctype='multipart/form-data'>
                <h2 >Добавление направления</h2>
                <label for="">Название</label>
                <input type="text" name="name">

                <label for="">Изображение</label>
                <input type="file" name="images">

                <label for="">Информация</label>
                <input type="text" name="information">
                <button type="submit" class="button-adding" name='button-adding'>Добавить</button>
            </form>
        </div>
    </div>
  
</body>
</html>