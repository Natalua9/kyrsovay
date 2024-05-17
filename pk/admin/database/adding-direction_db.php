<?php
include "../database/connect.php";
$name = $_POST['name'];

$information = $_POST['information'];
$img = $_FILES['images'];
if(move_uploaded_file($img['tmp_name'], 'images/'.$img['name'])){
    echo '<p align="center">Файл успешно загружен!</p>';
}
$im = 'images/'.$img['name'];
$d = new Direction($name, $im, $information);
if($d->saveData()){
    echo "<script>alert('Данные успешно добавлены!')</script>";
}else{
    echo "<script>alert('произошла ошибка!)'</script>";
}
//$query= mysqli_query($con, "i")

class Direction {

    function __construct($name, $img, $information){
        $this->name = $name;
        $this->img = $img;
        $this->information = $information;
    }

    public function validateEmpty($f){
        if(empty($f)) return true;
        return false;
    }

    public function saveData(){
        if($this->validateEmpty($this->name)){
            return 'Пустое значение поля name';
        }
        if($this->validateEmpty($this->img)){
            return 'Не выбрано изображение';
        }
        if($this->validateEmpty($this->information)){
            return 'Пустое значение поля information';
        }
        //добавлять в базу
        
        $con = new Connect();
        return mysqli_query($con->connection,"INSERT INTO directions(name, discription,
             images)  
            VALUES ('$this->name', '$this->information', '$this->img')"); 
    }
}


?>