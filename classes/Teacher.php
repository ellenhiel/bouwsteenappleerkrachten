<?php 

    class Teacher{

        const COST_PASSWORD = 12; //Cost amount for password hashing
        
        public static function canLogin($username, $password) {
            $conn = Database::getConnection();
            $query = $conn->prepare("SELECT * FROM teachers WHERE username = :username");
            
            $query->bindValue(":username", $username);
            $query->execute();

            $user = $query->fetch();
            $hash = $user['password'];

            if(!$user) {
                return false;
            }
            
            if(password_verify($password, $hash)) {
                return true;
            } else {
                return false;
            }
        }

        /*public static function setPassword($password){
            
            $options = [
                'cost' => self::COST_PASSWORD,
            ];

            $password = password_hash($password, PASSWORD_BCRYPT, $options);

            return $password;
        }*/

    }
    