<?php 
    if(isset($_GET['username']) && isset($_GET['senha'])) {
        $username = $_GET['username'];
        $senha = $_GET['senha'];
        if($username == "admin" && $senha == "123") {
            session_start();
            $_SESSION['cod_usr'] = "admin";
            header("Location:home.php");
        }
    } else {
        echo "Informe o login e senha";
    }
?>