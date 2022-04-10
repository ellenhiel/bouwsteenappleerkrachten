<?php
    class User{

        private $userId;
        private $firstname;
        private $lastname;
        private $password;

        const MIN_USERNAME = 5; //Minimum amount of username characters
        const MAX_USERNAME = 20; //Maximum amount of username characters

        const MIN_PASSWORD = 5; //Minimum amount of password characters
        const MAX_PASSWORD = 200; //Maximum amount of password characters
        const MIN_CAPITAL = 1; //Minimum amount of capital characters    
        const MAX_BIO = 350;  //Maximum amount of bio characters   

        const COST_PASSWORD = 12; //Cost amount for password hashing

        public function setUserId($userId){
            $this->userId = $userId;
        }

        public function getUserId(){
            return $this->userId;
        }

        public static function getFirstnameById($userId){
            $conn = Database::getConnection(); 
            $query = $conn->prepare("SELECT voornaam FROM leerlingen WHERE id = :userId");
            
            $query->bindValue(":userId", $userId);
            $query->execute();
            $firstname = $query->fetch();
            
            return $firstname;
        }

    }