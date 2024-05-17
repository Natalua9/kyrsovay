<?php
session_start();
$check = isset($_SESSION["user_id"]) ? true : false; 

if($check){ 
    $name = $_SESSION["user_name"]; 
    require_once 'database/User.php';
    $user = new User();
    $user_current = $user->selectDataUser($_SESSION["user_id"]);
} 
else{
    header('Location: index.php');
    exit;
}
require_once "database/Connect.php";
    include "header.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\personal-style.css">
    <link rel="stylesheet" href="css\style-header.css">
    <link rel="stylesheet" href="css\style-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <div class="container">
            <div class="personal-office">
                    <div class="main-text">
                    <h2 class = "main-text-h2">Личный кабинет</h2>
                        <div class="users-info">
                            <img src="images\3-рисунок 1.png" alt="">
                            <div class="text-name">
                                <h3> ФИО: <?=$user_current['surname'] ?> <?=$user_current['userName'] ?> <?=$user_current['patronymic'] ?></h3>
                                <h3>Почта: <?=$user_current['email_user'] ?></h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="history-record">
                    <h2>История записей</h2>
                <table>
                    <tr>
                        <th>дата записи</th>
                        <th>врач</th>
                        <th>ФИО врача</th>
                        <th>отмена записи</th>
                    </tr>
                    <tr>
                        <td>18.06.2012</td>
                        <td>Терапевт</td>
                        <td>Федоров Виктор Иванович</td>
                        <td> <img src="images/image 14 (1).png" alt=""></td>
                    </tr>
                    <tr>
                        <td>18.06.2012</td>
                        <td>Терапевт</td>
                        <td>Федоров Виктор Иванович</td>
                        <td> <img src="images/image 14 (1).png" alt=""></td>
                    </tr>
                </table>
                    </div>
                    <button class="sign-up">Записаться на прием</button>
            </div>
        </div>
    </main>
    <!-- футер -->
<?php
include "footer.php";
?>
</body>
</html>