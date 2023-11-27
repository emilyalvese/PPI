<?php

include_once "../controle/ControllerMusica.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $controller = new ControllerMusica();
    $controller->deletarMusica($id);
    header("Location: listagem.php");
    exit();
} else {
    echo("Erro ao excluir a música. ID não encontrado.");
    exit();
}
?>