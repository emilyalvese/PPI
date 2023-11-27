<?php

    include_once "ControllerMusica.php";
    include_once "../modelo/Musica.php";

    if(!isset($_POST['op'])){
        echo("O parâmetro não pode ser passado");
        exit();
    }

    $op = $_POST['op'];

    switch($op){
        case 'cadastrar':
            if(!isset($_POST['nome']) || !isset($_POST['cantora']) || !isset($_POST['tempo']) || !isset($_POST['album'])){
                echo("Erro ao cadastrar a música");
                exit();
            }
            echo $op;

            $nome = $_POST['nome'];
            $cantora = $_POST['cantora'];
            $tempo = $_POST['tempo'];
            $album = $_POST['album'];
            
            $controller = new ControllerMusica();
            $controller -> inserirMusica($nome, $cantora, $tempo, $album);
            header('Location: ../visao/listagem.php');
            break;

        case 'atualizar':
            if(!isset($_POST['id']) || !isset($_POST['nome']) || !isset($_POST['cantora']) || !isset($_POST['tempo']) || !isset($_POST['album'])){
                echo("Erro ao atualizar a música");
                exit();
            }

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $cantora = $_POST['cantora'];
            $tempo = $_POST['tempo'];
            $album = $_POST['album'];

            $controller = new ControllerMusica();
            $controller -> editarMusica($id, $nome, $cantora, $tempo, $album);

            header("Location: ../visao/listagem.php");
        break;

        case 'excluir':
            if (!isset($_POST['id'])) {
                echo("Erro ao excluir a música");
                exit();
            }
        
            $id = $_POST['id'];
            $controller = new ControllerMusica();
            $controller->deletarMusica($id);
            header("Location: ../visao/listagem.php");
            break;
    }

?>