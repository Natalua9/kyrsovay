<?php
 include "../database/connect.php";
 include "header-admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style-adding.css">
    <title>Добавление врача</title>
</head>
<body>
    <div class="container">
        <div class="bloc-main">
            <form action="adding-doctor_db.php" method="get" class="form-adding">
                <h2 >Добавление врача</h2>
                <label for="">ФИО</label>
                <input type="text" name="name">

                <!-- <label for="">Специальность</label>
                <input type="text" name="specialization"> -->
                
                <select name="" id="">
                    <option value="">Хирург</option>
                    <option value="">кардиолог</option>
                </select>

                <label for="">Почта</label>
                <input type="text" name="phone">

                <label for="">Изображение</label>
                <input type="text" name="images">
                <button class="button-adding">Добавить</button>
            </form>
        </div>
    </div>
</body>
</html>