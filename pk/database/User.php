<?php
require_once "Connect.php"; 
 
class User extends Connect{ 
    protected $surname; 
    protected $name; 
    protected $patronymic; 
    protected $city; 
    protected $policy; 
    protected $passport; 
    protected $dateBirth; 
    protected $email; 
    protected $password; 
    protected $role; 
    private $error_valid = false; 
    private $error_valid_text = []; 
 
    public function signup($surname, $name, $patronymic, $city, $policy, $passport, $dateBirth, $email, $password) 
    { 
        $this->validate($surname, $name, $patronymic, $city, $policy, $passport, $dateBirth, $email, $password); 
        if(!$this->error_valid){ 


            return mysqli_query($this->connection,"INSERT INTO Users(email_user, userName,
             policy, dateBirth, password, surname, patronymic, city, passport)  
            VALUES ('$email', '$name', '$policy', '$dateBirth', '$password',
             '$surname', '$patronymic', '$city', '$passport')"); 
        }else{ 
            return [ 
                "error_valid" => $this->error_valid, 
                "error_valid_text" => $this->error_valid_text 
            ]; 
        } 
    } 
    
    public function selectDataUser($id_user)
    {
        $user = mysqli_fetch_assoc(mysqli_query($this->connection,"SELECT * FROM users WHERE id_user=$id_user"));
        return $user;
    }

    public function signin($email, $password)
    {
        $this->validate_signin($email, $password);
        if(!$this->error_valid){
            $user = mysqli_fetch_assoc(mysqli_query($this->connection,"SELECT * FROM users WHERE email_user='$email'"));
            if($user){
                if($password == $user["password"]){

                    return [
                        "id_user" => $user["id_user"],
                        "role" => $user["role"],
                        "name" => $user["userName"]
                    ];
                }
                return [
                    "error_valid" => true,
                    "error_valid_text" => ["password" => "Неверный пароль!"]
                ];
            }
            return [
                "error_valid" => true,
                "error_valid_text" => ["email" => "Такой пользователь не найден"]
            ];
        }

        return [
            "error_valid" => $this->error_valid,
            "error_valid_text" => $this->error_valid_text
        ];
    }

    private function validate($surname, $name, $patronymic, $city, $policy, $passport, $dateBirth, $email, $password)
    {
        echo $surname. $name. $patronymic. $city. $policy. $passport. $dateBirth. $email. $password;
        $this->checkEmpty($surname, 'surname', 'Введите фамилию');
        $this->checkEmpty($name, 'name', 'Введите имя');
        $this->checkEmpty($patronymic, 'patronymic', 'Введите отчество');
        $this->checkEmpty($city, 'city', 'Введите город');
        $this->checkEmpty($passport, 'passport', 'Введите паспорт');
        $this->checkEmpty($policy, 'policy', 'Введите полис');
        $this->checkEmpty($dateBirth, 'dateBirth', 'Введите дату рождения');
        $this->checkEmpty($email, 'email', 'Введите email');
        $this->checkEmpty($password,'password', 'Введите пароль');
    }
    

    private function validate_signin($email, $password)
    {
        $this->checkEmpty($email, 'email', 'Введите почту');
        $this->checkEmpty($password, 'password', 'Введите пароль');
    }

    private function checkEmpty($value, $field, $message)
    {
        if (empty($value)) {
            $this->error_valid = true;
            $this->error_valid_text[$field] = $message;
        }
    }
}
?>
