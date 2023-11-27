<a href="cadastro.php">Tela de listagem</a>
<table id="musicas">

    <thead>
        <tr>
            <th>Id</th>
            <th>Música</th>
            <th>Cantora</th>
            <th>Tempo</th>
            <th>Álbum</th>
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
                    echo "<td><a class='' href='../visao/editar.php?acao=editar&id=" . $musica['id'] . " '>Editar</a></td>";
                    echo "<td><a class='' href='../visao/excluir.php?acao=excluir&id=" . $musica['id'] . " '>Excluir</a></td>";
                    echo "</tr>";
            }
        ?>
    </tbody>

</table>