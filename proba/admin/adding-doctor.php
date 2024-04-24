<?php
 include "../connect.php";
 include "header-admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-adding.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Добавление врача</title>
</head>
<body>
    <div class="container">
        <div class="bloc-main">
            <form action="adding-doctor_db.php" method="get" class="form-adding">
                <h2 >Добавление врача</h2>
                <label for="">ФИО</label>
                <input type="text" name="name">

                <label for="">Специальность</label>
                <input type="text" name="specialization">
                
                <label for="">Телефон</label>
                <input type="text" name="phone">

                <label for="">Изображение</label>
                <input type="text" name="images">
                <button class="button-adding">Добавить</button>
            </form>
        </div>
    </div>
  
</body>
</html>