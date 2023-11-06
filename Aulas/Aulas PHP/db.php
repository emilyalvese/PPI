<?php 
    function conectaDB(){
        $user = "root";
        $pass = "aluno";
        $host = "localhost";
        $bd = "crud";

        $con = new PDO("mysql:hos=$host;dbname=$bd",$user,$pass);
        return $con;
    }
?>