<?php
 include "../connect.php";
 include "header-admin.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-managinUser.css">
    <link rel="stylesheet" href="../style-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            <tr>
                <td>Хирургия</td>
                <td>1.jpg</td>
                <td><p>В двух отделениях хирургии осуществляется 
                    диагностика и лечение заболеваний желудочно......</p></td>
                <td>
                <a href="">удалить</a><br>
                <a href="">редактировать</a>
                </td>
                
            </tr>
            <tr>
                <td>Хирургия</td>
                <td>1.jpg</td>
                <td><p>В двух отделениях хирургии осуществляется 
                    диагностика и лечение заболеваний желудочно......</p> </td>
                <td>
                <a href="">удалить</a><br>
                <a href="">редактировать</a>
                </td>
                
            </tr>
            <tr>
                <td>Хирургия</td>
                <td>1.jpg</td>
                <td><p>В двух отделениях хирургии осуществляется 
                    диагностика и лечение заболеваний желудочно......</p></td>
                <td>
                <a href="">удалить</a><br>
                <a href="">редактировать</a>
                </td>
                
            </tr>
            <tr>
                <td>Хирургия</td>
                <td>1.jpg</td>
                <td><p>В двух отделениях хирургии осуществляется 
                    диагностика и лечение заболеваний желудочно......</p> </td>
                <td>
                <a href="">удалить</a><br>
                <a href="">редактировать</a>
                </td>
                
            </tr>
            <tr>
                <td>Хирургия</td>
                <td>1.jpg</td>
                <td><p>В двух отделениях хирургии осуществляется 
                    диагностика и лечение заболеваний желудочно......</p> </td>
                <td>
                <a href="">удалить</a><br>
                <a href="">редактировать</a>
                </td>
            </tr>
        </table>
        <div class="button-add-direction">
            <!-- <img src="../images\image 15.png" alt=""> -->
            <button > Добавить направление</button>
        </div>
        </div>
    </main>
<?php
 include "../footer.php";

?>
</body>
</html>
