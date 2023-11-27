<?php

    if(!isset($_GET['id']) || !isset($_GET['acao'])){
    echo("O parametro não foi informado");
    exit();
    }

    $id = $_GET['id'];
    $acao = $_GET['acao'];

    switch($acao){
        case 'editar':
            header('Location: ../visao/editar.php?id='.$id);
        break;
        case 'excluir':
            header('Location: ../visao/excluir.php?id='.$id);
        break;
    }

?>