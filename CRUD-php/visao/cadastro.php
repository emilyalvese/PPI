<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
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
            display: block;
            text-align: center;
        }
    </style>

<form action="../controle/Rota.php" method="post">
    <input type="text" name="nome" placeholder="Música">
    <input type="text" name="cantora" placeholder="Cantora">
    <input type="text" name="tempo" placeholder="Tempo">
    <input type="text" name="album" placeholder="Álbum">
    <input type="text" name="op" value="cadastrar" hidden>
    <input type="submit" value="Cadastrar">
    
    <a href="listagem.php">Tela de listagem</a>
</form>