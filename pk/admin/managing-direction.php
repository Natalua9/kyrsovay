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
    <title>Управление направлениями</title>
</head>
<body>
    <main>
        <div class="container">
            <h2 class="text-name-direction">Управление направлениями</h2>
            <table>
                <tr>
                    <th>название</th>
                    <th>картинка</th>
                    <th>информация</th>
                    <th>удалить/редактировать </th>
                </tr>
                <?php 
                    $dirAll = Direction::getData();
                    foreach($dirAll as $dirOne){    
                ?>
                <tr>
                    <td><?=$dirOne[1]?></td>
                    <td>
                        <img src='<?=$dirOne[3]?>'>
                    </td>
                    <td><?=$dirOne[2]?></td>
                    <td>
                    <a href="">удалить</a><br>
                    <a href="">редактировать</a>
                    </td>
                </tr>
                <?php
                    } 
                ?>
                    </table>
            <div class="button-add-direction">
               <a href="adding-direction.php"> <button type="submit" class="button-adding" name='button-adding'>Добавить</button></a>
            </div>
            </div>

    </main>
<?php
 include "../footer.php";
?>
</body>
</html>
