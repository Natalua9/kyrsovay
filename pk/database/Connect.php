
<?php
class Connect{
    private $host ='localhost';
    private $user = 'root';
    private $pass ='';
    private $db = "hospital";
    public $connection = null;

    public function __construct(){
        $this->connection=mysqli_connect($this->host, $this->user , $this->pass , $this->db);
    }
}
?>