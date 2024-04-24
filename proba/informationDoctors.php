<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-informDoctors.css">
    <link rel="stylesheet" href="style-header.css">
    <link rel="stylesheet" href="style-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<main>
    <div class="container">
        <div class="descriptionDoctor">
            <h2>Информация о враче</h2>
            <div class="textDescription">
                <img src="images\ВРАЧ 3 1.png" alt="">
                <div class="textNameDoctor">
                    <h3>Морозова Александра Григорьевна</h3>
                    <p>Специальность: Терапевт</p>
                </div>
            </div>
        </div>
    </div>
    <div class="make-an-appointment">
        <form action="" method="post" class="form-record">
        <H2>Записаться на прием</H2>
        <input name="name" type="text" placeholder="ФИО">
        <input name="record" type="text" placeholder="Дата">
        <button type="submit">Записаться</button>
        </form>

    </div>
</main>
<!-- футер -->
<?php
include "footer.php";
?>
</body>
</html>