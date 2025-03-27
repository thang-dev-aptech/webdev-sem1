<?php
    if(!defined("_CODE")){
        die("Error");
    }
    class Database{
        private $pdo;

        public function __construct(){
            try {
                $this->pdo = new PDO('mysql:host='._DB_HOST.';dbname='._DB_NAME.';port=3306', _DB_USER, _DB_PASS);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        } 
        public function getConnection(){
            return $this->pdo;
        }
        public function isConnected(){
            return $this->pdo !== null;
        }
        public function disconnect(){
            $this->pdo = null;
        }
    }
    
    
    
    

?>