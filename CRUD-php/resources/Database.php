<?php 

    class Database{
        private $host;
        private $user;
        private $password;
        private $database;
        private $connection;

        public function getConnection(){
            $this -> user = "root";
            $this -> password = "aluno";
            $this -> host = "localhost";
            $this -> database = "crud";
            $this -> connection = new PDO("mysql:host=$this->host;dbname=$this->database",$this->user,$this->password);

            return $this->connection;
        }
    }

?>