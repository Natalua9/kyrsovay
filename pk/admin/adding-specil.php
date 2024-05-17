<?php
 include "../database/connect.php";
 include "header-admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css\style-managinUser.css"> -->
    <link rel="stylesheet" href="css\style-adding.css">
    <title>Добавление специальности</title>
</head>
<body>
    <div class="container">
        <div class="bloc-main">
            <form action="adding-doctor_db.php" method="get" class="form-adding">
                <h2 >Добавление специальность</h2>
                <label for="">название</label>
                <input type="text" name="name">

                <select name="" id="">
                    <option value="">хирургия</option>
                    <option value="">кардиология</option>

                </select>
                <button class="button-adding">Добавить</button>
            </form>
        </div>
    </div>
  
</body>
</html>