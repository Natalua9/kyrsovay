<?php 
require_once "database/User.php";

session_start(); 
$check = isset($_SESSION["user_id"]) ? true : false; 

if($check){ 
    $name = $_SESSION["user_name"]; 
} 

?> 
<nav>
    <div class="container">
        <header class="header"> 
            <div>
                <h1 class="logo-name">РКБ</h1>
            </div>

            <div class="header-name">
                <a href="doctors.php">Врачи</a>
                <a href="directions.php">Направления</a>
                <a href="#footer">Контакты</a>
                <a href="index.php">Главная</a>               
            </div>
            <?php if(!$check){ ?> 
                <div class="exit">
                    <a href="/">Вход</a>
                </div>
            <?php } else { ?>
                <div class="exit">
                    <img src="images\free-icon-user-848043 2.png" alt=""> 
                    <a href="/personal-cap.php"><?=$name?></a>
                    <a href="/logout.php">Выйти</a>
                </div>
            <?php } ?> 
        </header>
    </div>
</nav>