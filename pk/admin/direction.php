<?php 

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
            return false;
        }
        if($this->validateEmpty($this->img)){
            return false;
        }
        if($this->validateEmpty($this->information)){
            return false;
        }
        //добавлять в базу
        
        $con = new Connect();
        return mysqli_query($con->connection,"INSERT INTO directions(name, discription,
             images)  
            VALUES ('$this->name', '$this->information', '$this->img')"); 

    }

    static public function getData(){
        $con = new Connect();
        
        return mysqli_fetch_all(mysqli_query($con->connection,"select * from directions")); 
    }
}
