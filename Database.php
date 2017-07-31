<?php
class Database{
    private $dbhost = "localhost";
    private $dbname = "login-register";
    private $dbuser = "root";
    private $dbpass = "";
    public $pdo;

    public function __construct()
    {
        if(!isset($this->pdo)){
            try{
                $conn = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname,$this->dbuser,$this->dbpass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $conn;
            }catch (PDOException $ex){
                die("Database connection failed".$ex->getMessage());
            }
        }
    }
}