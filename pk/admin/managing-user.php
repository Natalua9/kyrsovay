<?php
 include "../database/Connect.php";

 include "header-admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style-managinUser.css">
    <link rel="stylesheet" href="../css\style-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Управление пользователями</title>
</head>
<body>
    <main>
        <div class="container">
        <h2 class="text-name-direction">Управление пользователями</h2>
        <table>
            <tr>
                <th>почта</th>
                <th>полис</th>
                <th>паспорт</th>
                <th>ФИО посетителя</th>
                <th>дата рождения</th>
                <th>заблокировать/разблокировать </th>
            </tr>
            <tr>
                <td>Donkolns16@mail.ru</td>
                <td>179-35-26</td>
                <td>801969238</td>
                <td>Федоров Виктор Иваванович</td>
                <td>17.05.2003</td>
                <td><a href="">заблокировать</a></td>
            </tr>
            <tr>
            <td>Donkolns16@mail.ru</td>
                <td>179-35-26</td>
                <td>801969238</td>
                <td>Федоров Виктор Иваванович</td>
                <td>17.05.2003</td>
                <td><a href="">заблокировать</a></td>
            </tr>
            <tr>
            <td>Donkolns16@mail.ru</td>
                <td>179-35-26</td>
                <td>801969238</td>
                <td>Федоров Виктор Иваванович</td>
                <td>17.05.2003</td>
                <td><a href="">разблокировать</a></td>

            </tr>
            <td>Donkolns16@mail.ru</td>
                <td>179-35-26</td>
                <td>801969238</td>
                <td>Федоров Виктор Иваванович</td>
                <td>17.05.2003</td>
                <td><a href="">заблокировать</a></td>

            </tr>
            <td>Donkolns16@mail.ru</td>
                <td>179-35-26</td>
                <td>801969238</td>
                <td>Федоров Виктор Иваванович</td>
                <td>17.05.2003</td>
                <td><a href="">разблокировать</a></td>
            </tr>
        </table>
        </div>
    </main>
    <?php
 include "../footer.php";
?>
</body>
</html>
