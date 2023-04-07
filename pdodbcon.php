<?php
class Database

{
    private $dbserver="localhost";
    private $dbuser="james";
    private $dbpass="james";
    private $db="datainfo";
    protected $con;

    //constructor

    public function __construct(){
        try{
            $dsn="myql:host={$this->dbserver};
            dbname={$this->db}; charset=utf";
            $option=array(PDO::ATTR_PERSISTENT);
            $this->con=new PDO ($dsn,$this->dbuser,
            $this->dbpass,$option);
        }catch(PDOException $e){
            echo "Connection Error".$e-> getMessage();
        }
        
    }

}




?>