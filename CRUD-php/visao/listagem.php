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
                    echo "<td>" . $musica -> getId() . "</td>";
                    echo "<td>" . $musica -> getNome() . "</td>";
                    echo "<td>" . $musica -> getCantora() . "</td>";
                    echo "<td>" . $musica -> getTempo() . "</td>";
                    echo "<td>" . $musica -> getAlbum() . "</td>";

                echo '<td>
                    <form action="../controle/Rota.php" method="post"> 
                        <input type="text" name="id" value="' . $musicas['id'] . '" hidden>
                        <input type="text" name="op" value="atualizar" hidden>;
                        <input type="text" name="nome" value="' . $musicas['nome'] . '" hidden>
                        <input type="text" name="cantora" value="' . $musicas['cantora'] . '" hidden>
                        <input type="text" name="tempo" value="' . $musicas['tempo'] . '" hidden>
                        <input type="text" name="album" value="' . $musicas['album'] . '" hidden>

                        <input type="submit" value="Atualizar">
                    </form>
                </td>';

                echo '<td.
                    <form action="../controle/Rota.php" method="post"> 
                        <input type="text" name="op" value="excluir" hidden>
                        <input type="text" name="id" value="' . $musicas['id'] . '" hidden>
                        <input type="submit" value="Excluir">
                    </form>
                </td>';
            
                echo "</tr>";
            }
        ?>
    </tbody>

</table>