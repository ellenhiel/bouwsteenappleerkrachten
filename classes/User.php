<?php
    class User{

        private $userId;
        private $password;
        private $title;
        private $description;
        private $reward;
        private $date;
        private $subject_id;
        private $class_id;

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

        public function setTitle($title){
            $this->title = $title;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setDescription($description){
            $this->description = $description;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setReward($reward){
            $this->reward = $reward;
        }

        public function getReward(){
            return $this->reward;
        }

        public function setDate($date){
            $this->date = $date;
        }

        public function getDate(){
            return $this->date;
        }

        public function setSubject_id($subject_id){
            $this->subject_id = $subject_id;
        }

        public function getSubject_id(){
            return $this->subject_id;
        }

        public function setClass_id($class_id){
            $this->class_id = $class_id;
        }

        public function getClass_id(){
            return $this->class_id;
        }

        public static function getCourseById($classId){
            $conn = Database::getConnection(); 
            $query = $conn->prepare("SELECT * FROM subjects WHERE classes_id = :classId");
            
            $query->bindValue(":classId", $classId);
            $query->execute();
            $courses = $query->fetchAll();
            
            return $courses;
        }

        public static function getSubjectById($subject_id){
            $conn = Database::getConnection(); 
            $query = $conn->prepare("SELECT name FROM subjects WHERE id = :subject_id");
            
            $query->bindValue(":subject_id", $subject_id);
            $query->execute();
            $courses = $query->fetch();
            
            return $courses;
        }

        public static function getClassesIdById($userId){
            $conn = Database::getConnection(); 
            $query = $conn->prepare("SELECT id FROM teachers_classes WHERE teachers_id = :userId");
            
            $query->bindValue(":userId", $userId);
            $query->execute();
            $classesId = $query->fetchAll();
            
            return $classesId;
        }

        public static function getClassesById($classId){
            $conn = Database::getConnection(); 
            $query = $conn->prepare("SELECT * FROM classes WHERE id = :classId");
            
            $query->bindValue(":classId", $classId);
            $query->execute();
            $classId = $query->fetchAll();
            
            return $classId;
        }

        public static function getClassById($classId){
            $conn = Database::getConnection(); 
            $query = $conn->prepare("SELECT name FROM classes WHERE id = :classId");
            
            $query->bindValue(":classId", $classId);
            $query->execute();
            $className = $query->fetch();
            
            return $className['name'];
        }

        public function opdrachtToevoegen(){
            $conn = Database::getConnection();
            $query = $conn->prepare("INSERT INTO assignments (id, name, description, reward, due_date, subjects_id, classes_id) VALUES (NULL, :title, :description, :reward, :date, :subject_id, :class_id)");
            
            $query->bindValue(":title", $this->title);
            $query->bindValue(":description", $this->description);
            $query->bindValue(":reward", $this->reward);
            $query->bindValue(":date", $this->date);
            $query->bindValue(":subject_id", $this->subject_id);
            $query->bindValue(":class_id", $this->class_id);

            $result = $query->execute();
            return $result; 
        }

        public static function getAssignmentsById($class_id, $subject_id){
            $conn = Database::getConnection(); 
            $query = $conn->prepare("SELECT * FROM assignments WHERE subjects_id = :subject_id AND classes_id = :class_id ORDER BY due_date ASC");
            
            $query->bindValue(":subject_id", $subject_id);
            $query->bindValue(":class_id", $class_id);
            $query->execute();
            $assignment = $query->fetchAll();
            
            return $assignment;
        }
    }