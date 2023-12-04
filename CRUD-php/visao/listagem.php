<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #751808;
            color: #fff;
            text-align: center;
            padding: 20px;
            width: 100%;
        }

        h1 {
            margin: 0;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #751808;
            color: #fff;
        }

        td a {
            text-decoration: none;
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 4px;
            color: #fff;
        }

        td a.edit {
            background-color: #9e2611;
        }

        td a.delete {
            background-color: #9e2611;
        }

        .cadastro-button {
            background-color: #9e2611;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .cadastro-button:hover {
            background-color: #751808;
        }

        img{
            width: 150px;
        }
    </style>

<header>
    <h1><a>Lana Del Rey`s songs</a></h1>
</header>

<br>
<br>
<a class="cadastro-button" href="cadastro.php">Tela de cadastro</a>

<br>
<img src="../resources/laninha.jpg" alt="The Saint Lana Del Rey">

<table id="musicas">

    <thead>
        <tr>
            <th>Id</th>
            <th>Música</th>
            <th>Cantora</th>
            <th>Tempo</th>
            <th>Álbum</th>
            <th>Ações</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php
            include_once "../controle/ControllerMusica.php";
            $controller = new ControllerMusica();
            $musicas = $controller -> listarMusicas();

            foreach($musicas as $musica){
                echo "<tr>";
                    echo "<td>" . $musica['id'] . "</td>";
                    echo "<td><p>" . htmlspecialchars($musica['nome']) . "</p></td>";
                    echo "<td><p>" . htmlspecialchars($musica['cantora']) . "</p></td>";
                    echo "<td><p>" . htmlspecialchars($musica['tempo']) . "</p></td>";
                    echo "<td><p>" . htmlspecialchars($musica['album']) . "</p></td>";
                    echo "<td><a class='edit' href='../visao/editar.php?acao=editar&id=" . $musica['id'] . " '>Editar</a></td>";
                    echo "<td><a class='delete' href='../visao/excluir.php?acao=excluir&id=" . $musica['id'] . " '>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>

</table>