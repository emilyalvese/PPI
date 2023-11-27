<?php
    include_once "../controle/ControllerMusica.php";
    include_once "../modelo/Musica.php";
    
    if(!isset($_GET['id'])){
        echo("O parâmetro não foi informado");
        exit();
    }
    $id = $_GET['id'];
    $ControllerMusica = new ControllerMusica();
    $musica = $ControllerMusica->getMusica($id);

    if ($musica == null) {
        echo("Erro ao buscar a música");
        exit();
    }
?>

<div>
    <div>
        <div>
            <form action='../controle/Rota.php' method='POST'>
                <input type='hidden' name='op' value='atualizar'>
                <div>
                    <label for='nome'>Id</label>
                    <input type='text' name='id' value='<?php echo $musica->getId() ?>' disable>
                </div>
                <div>
                    <label for='nome'>Nome</label>
                    <input type='text' name='nome' value='<?php echo $musica->getNome() ?>'>
                </div>
                <div>
                    <label for='nome'>Cantora</label>
                    <input type='text' name='cantora' value='<?php echo $musica->getCantora() ?>'>
                </div>
                <div>
                    <label for='nome'>Tempo</label>
                    <input type='text' name='tempo' value='<?php echo $musica->getTempo() ?>'>
                </div>
                <div>
                    <label for='nome'>Album</label>
                    <input type='text' name='album' value='<?php echo $musica->getAlbum() ?>'>
                </div>
                <div>
                    <input type='submit' value='Atualizar' >
                    <a href='listagem.php'>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>