<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuarios</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form_usuario.css">
</head>
<body>
    <?php  include_once("viewMenu.php"); ?>
    <h1>Cadastrar Usuarios</h1>
    <div class="conatiner">
        <h1>Sobre o Crud</h1>
        <p>Crud desenvolvido para a disciplina de Programação Web, tem como objetivo sem um exemplo simples de desenvolvimento de CRUD em php. Por isso diversas simplificações foram feitas entre elas a implementação do modelo não OO e sem tratamento de requisições ou sanitizações</p>
        <h2>Os arquivos</h2>
        <p>Os arquivos estão dipposto em arquivos </p>
        <pre>
            <code>./View</code>  - Diretório contendo arquivos de visão e controle.<br><br>
            <code>./View/form_usuario.css</code> - Arquivo CSS para estilização do formulário de dados do usuário.<br><br>
            <code>./View/telaEditarUsuario.php</code> - Arquivo PHP responsável pela tela de edição de usuário.<br><br>
            <code>./View/excluir_usuario.php</code> - Arquivo PHP que implementa a funcionalidade de exclusão de usuário.<br><br>
            <code>./View/cadastrar_usuario.php</code> - Arquivo PHP que implementa a funcionalidade de cadastro de usuário.<br><br>
            <code>./View/viewMenu.php</code> - Arquivo PHP que implementa o menu de navegação.<br><br>
            <code>./View/viewListagemUsuarios.php</code> - Arquivo PHP que implementa a funcionalidade de listagem de usuários.<br><br>
            <code>./View/telaListaUsuarios.php</code> - Arquivo PHP responsável pela tela de listagem de usuários.<br><br>
            <code>./View/telaCadastrarUsuario.php</code> - Arquivo PHP responsável pela tela de cadastro de usuários.<br><br>
            <code>./View/style.css</code> - Arquivo CSS para estilização geral do site.<br><br>
            <code>./View/tela_sobre.php</code> - Arquivo PHP responsável pela tela "Sobre".<br><br>
            <code>./index.php</code> - Arquivo PHP que implementa a tela inicial.<br><br>
            <code>./Model</code> - Diretório contendo arquivos de modelo.<br><br>
            <code>./Model/DAUsuario.php</code> - Arquivo PHP do modelo de acesso a dados do usuário.<br><br>
            <code>./Dockerfile</code> - Arquivo de configuração do Docker para o ambiente PHP.<br><br>
            <code>./docker-compose.yml</code> - Arquivo de configuração do Docker Compose para o ambiente PHP.<br><br>
            <code>./init-db.sql</code> - Arquivo SQL para configuração e inicialização do banco de dados.<br><br>
    </pre>
    </div>
</body>
</html>