<?php
session_start();
 include "../database/Connect.php";
 include "header-admin.php";
 include "direction.php";

 if($_SESSION['user_role'] != 'admin') header('Location: /');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style-managinUser.css">
    <link rel="stylesheet" href="/css\style-footer.css">
    <title>Управление врачами</title>
</head>
<body>
    <main>
        <div class="container">
        <h2 class="text-name-direction">Управление врачами</h2>
            <table>
                <tr>
                    <th>специальность</th>
                    <th>почта</th>
                    <th>ФИО врача</th>
                    <th>изображение</th>
                    <th>удаление</th>
                </tr>
                <tr>
                    <td>Терапевт</td>
                    <td>mail@mail.ru</td>
                    <td>Федоров Виктор Иваванович</td>
                    <td>1.jpg</td>
                    <td><img src="../images\image 14 (1).png" alt=""></td>
                    
                </tr>
                <tr>
                <td>Хирург</td>
                    <td>8mail@mail.ru</td>
                    <td>Федоров Виктор Иваванович</td>
                    <td>1.jpg</td>
                    <td><img src="../images\image 14 (1).png" alt=""></td>
                </tr>
                <tr>
            
                
            </table>
            <div class="button-add-direction">
            <!-- <img src="../images\image 15.png" alt=""> -->
            <a href="adding-doctor.php"> <button type="submit" class="button-adding" name='button-adding'>Добавить</button></a>
        </div>
        </div>

    </main>
<?php
 include "../footer.php";

?>
</body>
</html>
