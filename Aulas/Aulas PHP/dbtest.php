<?php 
    include_once "db.php";

    if(conectaDB()){
        echo "Conectado no banco de dados!";
    } else{
        echo "Falha na conexão como  banco de daods!";
    }
?>