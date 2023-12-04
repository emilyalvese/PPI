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

<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #9e2611;
            color: #fff;
            cursor: pointer;
            border: none;
            padding: 10px;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #751808;
        }

        a {
            text-decoration: none;
            color: #333;
            margin-left: 10px;
        }
    </style>

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