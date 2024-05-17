<?php
session_start();
$check = isset($_SESSION["user_id"]) ? true : false; 

if($check){ 
    $name = $_SESSION["user_name"]; 
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0 ,  minimum-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\style-footer.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Больница РКБ</title>
</head>
<body>
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

            <?php if(!$check){ ?> 
                <div class="auto-reg">
                    <a href="#"  data-bs-toggle="modal" data-bs-target="#sign" >Вход</a>
                </div>
            <?php } else { ?>
                <div class="exit">
                    <img src="images\free-icon-user-848043 2.png" alt=""> 
                    <a href="/personal-cab.php"><?=$name?></a>
                    <a href="/logout.php">Выйти</a>
                </div>
            <?php } ?> 
        </div>
        <div class="header-menu">
            <div class="menu_button">
                <span></span>
                <span></span>
                <span></span>

            </div>
            <div class="menu-list">
                <ul>
                    <li><a href="">Врачи</a></li>
                    <li><a href="">Направления</a></li>
                    <li><a href="">Контакты</a></li>
                    <li><a href="">Врачи</a></li>
                </ul>
            </div>
        </div>
    </header>
</div>
</nav>
 <main>
 <!-- блок с направлениями --> 
<div class="container">
    <div class="directions">
        <h2 class="name-directions">НАПРАВЛЕНИЯ</h2>
        <div class="bloc-directions">
            <div class="bloc-name-directions">
                <img src="images/image 2.png " alt="" class="img-kardio" >
                <div class="bloc-directions-text">
                    <h3>Кардиология</h3>
                    <p>диагностика и лечение сердечно сосудистых заболеваний</p>
                </div>
            </div>
            <div class="bloc-name-directions">
                <img src="images/Artroskopiya 1.png" alt="" class="img-kardio" >
                <div class="bloc-directions-text">
                    <h3>Артроскопия</h3>
                    <p>современный метод лечения болезней суставов</p>
                </div>
            </div>
            <div class="bloc-name-directions">
                <img src="images/preview 1.png" alt="" class="img-kardio" >
                <div class="bloc-directions-text">
                    <h3>Хирургия</h3>
                    <p>современные методы диагностики и лечения</p>
                </div>
            </div>
            <div class="bloc-name-directions">
                <img src="images/image 1.png " alt="" class="img-kardio" >
                <div class="bloc-directions-text">
                    <h3>Неврология</h3>
                    <p>лечебная диагностика</p>
                </div>
            </div>
        </div>
        <a href="directions.php"><button class="button-directions" >Все направления </button></a>
    </div>
</div> 

<!-- блок с врачами -->
 <div class="main-doctor">
    <div class="container">
        <div class="doctors">
            <h2 class="name-doctors">НАШИ ВРАЧИ</h2>
            <div class="card-bloc">
                <div class="bloc-doctors">
                    <img src="images/3-рисунок 1.png" >
                    <h3>Иванов Федор Петрович</h3>
                    <p>Заведующий хирургическим 
                        отделением</p>
                </div>
                <div class="bloc-doctors">
                    <img src="images/ВРАЧ 3 1.png" >
                    <h3>Морозова Александра Григорьевна</h3>
                    <p>Терапевт</p>
                </div>
                <div class="bloc-doctors">
                    <img src="images/ВРАЧ2 1.png" >
                    <h3>Степанов Михаил Владимирович</h3>
                    <p>Хирург</p>
                </div>
                <div class="bloc-doctors">
                    <img src="images/image 3.png" >
                    <h3>Куликов Михаил Иванович</h3>
                    <p>Травматолог</p>
                </div>
            </div>
       <a href="doctors.php"><button class="button-doctors" >Все врачи</button></a>
        </div>
    </div>
</div> 


<!-- блок с новостями -->
 <div class="container">
    <div class="news">
        <h2 class="name-news">Ознакомьтесь с последними новостями</h2>
        <div class="bloc-card-new">
            <div class="bloc-new">
                <img src="images/image 4.png" alt="">
                <p>ПО МЕРЕ СМЕНЫ СЕЗОНОВ МЕНЯЮТСЯ И РЕКОМЕНДАЦИИ ПО АНТИБИОТИКАМ</p>
            </div>
            <div class="bloc-new">
                <img src="images/image 5.png" alt="">
                <p>БОРЬБА С РАКОМ ЖЕЛУДКА НА МЕСТНОМ И ГЛОБАЛЬНЫХ УРОВНЯХ</p>
            </div>
            <div class="bloc-new">
                <img src="images/image 6.png" alt="">
                <p>ВЕГЕНСКАЯ ЕДА УЛУЧШАЕТ ЗДОРОВЬЕ СЕРДЕЧНО-СОСУДИСТОЙ СИСТЕМЫ</p>
            </div>
        </div>
    </div>
</div> 

<!-- блок с картинками -->
 <div class="information">
    
    <img src="images/image 7.png" alt="" class="information-img">
    <div class="information-bloc">
        <div class="text-We-strive-to">
            <div class="text-people">
            <p class="style-text-people">Каждый обратившийся к нам человек 
                может с уверенностью рассчитывать на внимание персонала, 
                профессионализм врачей и комфорт пребывания</p>
            </div>
            <div class="text-people2">
                <p class="style-text-people2">Наша больница готовит следующее 
                поколение лидеров в медицине и науке</p>
            </div>
        </div>
        <div class="quality">
            <p class="style-text-quality">Мы стремимся обеспечить максимально качественное и безопасное
                лечение для каждого пациента.</p>
        </div>
    </div>
</div> 
</main> 
<?php
 include "footer.php";

?>

<!-- модальное окно  авторизация-->

<div class="modal fade" id="sign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-auth">
        <div class="modal-header">
            <div class="modal-header-title">
                <h3 class="modal-title" id="exampleModalLabel">Авторизация</h3>
            </div>
            <div class="modal-header-button">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
        </div>
        <div class="modal-body">
            <form action=" /user/auto-db.php" method="post" class="modal-body-form">
                <input required type="text" name="email" class="form-control" placeholder="Почта" >
                <input required type="text" name="password" class="form-control" placeholder="Пароль" >
                <button required type="submit" class="btn btn-primary" id="button-entrance">Войти</button>
            
            </form>
        </div>
        <hr>
    <p class= "text-reg">Нет аккаута <a href="#"  data-bs-toggle="modal" data-bs-target="#reg" >Зарегистрируйтесь</a></p>

        </div>
    </div>
</div>

<!-- модальное окно  регистрация-->
<div class="modal fade" id="reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-auth">
        <div class="modal-header">
            <div class="modal-header-title">
                <h3 class="modal-title" id="exampleModalLabel">Регистрация</h3>
            </div>
            <div class="modal-header-button">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
        </div>
        <div class="modal-body">
            <form action="/user/reg-db.php" method="post" class="modal-body-form">
                <input required type="text" name="email" class="form-control" placeholder="почта" >
                <input required type="text" name="surname" class="form-control" placeholder="Фамилия" >
                <input required type="text" name="name" class="form-control" placeholder="Имя" >
                <input required type="text" name="patronymic" class="form-control" placeholder="Отчество" >
                <input required type="text" name="city" class="form-control" placeholder="Город" >
                <input required type="text" name="passpost" class="form-control" placeholder="Паспорт" >
                <input  required type="date" name="date" class="form-control" placeholder="Дата рождения" >
                <input  required type="text" name="polis" class="form-control" placeholder="Полис" >
                <input required type="text" name="password" class="form-control" placeholder="Пароль" >
                <button type="submit" class="btn btn-primary" id="button-entrance">Прикрепиться</button>
            </form>
        </div>
     
        </div>
    </div>
</div>
<script src="js.js"></script>
</body>

</html>
