<?php
 include "../connect.php";
 include "header-admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style-adding.css">
    <title>Добавление направление</title>
</head>
<body>
    <div class="container">
        <div class="bloc-main">
            <form action="adding-direction_db.php" method="get" class="form-adding">
                <h2 >Добавление направления</h2>
                <label for="">Название</label>
                <input type="text" name="name">

                <label for="">Изображение</label>
                <input type="text" name="images">

                <label for="">Информация</label>
                <input type="text" name="information">
                <button type="submit" class="button-adding">Добавить</button>
            </form>
        </div>
    </div>
  
</body>
</html>