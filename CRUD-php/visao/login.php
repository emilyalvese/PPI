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
</head>
<body>

<img src="../resources/lanadelrey.png" alt="Lana Del Rey">
<form action="listagem.php">
    <input type="text" name="username" placeholder="Usuário">
    <input type="password" name="password" placeholder="Senha">
    <input type="text" name="op" value="login" hidden>
    <input type="submit" value="Login">
</form>

</body>