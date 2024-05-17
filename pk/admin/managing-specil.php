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
    <title>Управление специальностями</title>
</head>
<body>
    <main>
        <div class="container">
        <h2 class="text-name-direction">Управление специальностями</h2>
        <table>
            <tr>
                <th>название</th>
                <th>направление</th>
                <th>удалить/редактировать </th>
          
            </tr>
            <tr>
                <td>хирург</td>
            <td>
            <select name="" id="">
                <option value="">хирургия</option>
                <option value="">кардиология</option>

             </select>
            </td>
            <td>
                    <a href="">удалить</a><br>
                    <a href="">редактировать</a>
                    </td>
            </tr>
            <tr>
                <td>хирург</td>
            <td>
            <select name="" id="">
                <option value="">хирургия</option>
                <option value="">кардиология</option>

             </select>
            </td>
            <td>
                    <a href="">удалить</a><br>
                    <a href="">редактировать</a>
                    </td>
            </tr>
        

        </table>
        <div class="button-add-direction">
               <a href="adding-specil.php"> <button type="submit" class="button-adding" name='button-adding'>Добавить</button></a>
            </div>
        </div>
    </main>
    <?php
 include "../footer.php";
?>
</body>
</html>
