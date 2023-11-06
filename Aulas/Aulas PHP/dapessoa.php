<?php 
    include_once "db.php";
    function cadastrarPessoa($nome,$email,$senha){
        $con = conectaDB();
        $sql = "INSERT INTO usr (nome, email, senha) VALUES (:nome, :email, :senha);";
        $stmt = $con->prepare($sql);
        $stmt -> bindParam(":nome",$nome);
        $stmt -> bindParam(":email",$email);
        $stmt -> bindParam(":senha",$senha);
        $stmt -> execute();
    }
?>