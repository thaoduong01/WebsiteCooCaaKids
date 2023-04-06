<?php
    include "../model/config.php";

    
    class Database{
        public $host = DB_HOST;
        public $user = DB_USER;
        public $pass = DB_PASS;
        public $dbname = DB_NAME;

        public $conn, $error;


        public function __construct(){
            $this->connectDB();
        }

        private function connectDB(){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if($this->conn){
                $this->error = "Connect fail" .$this->conn->connect_error;
            
            return false;
            }
        }

        //select or read db
        public function select($query){
            $result = $this->conn->query($query) or die($this->conn->error.__LINE__);
            if($result->num_rows > 0)
                return $result;
            else return false;
        }

        //insert db
        public function insert($query){
            $insert = $this->conn->query($query) or die($this->conn->error.__LINE__);
            if($insert)
                return $insert;
            else return false;
        }

        //update db
        public function update($query){
            $update = $this->conn->query($query) or die($this->conn->error.__LINE__);
            if($update)
                return $update;
            else return false;
        }

        //delete db
        public function delete($query){
            $delete = $this->conn->query($query) or die($this->conn->error.__LINE__);
            if($delete)
                return $delete;
            else return false;
        }
    }
?>