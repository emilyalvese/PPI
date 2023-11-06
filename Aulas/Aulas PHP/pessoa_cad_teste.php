<?php 
    include_once "dapessoa.php";

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    cadastrarPessoa($nome,$email,$senha);
?>