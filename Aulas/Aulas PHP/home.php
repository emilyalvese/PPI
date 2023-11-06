<?php 
    session_start();
    if(isset($_SESSION['cod_usr'])) {
        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Home Page</h1>
    <?php 
        echo $_SESSION['cod_usr'];
    ?>

    <a href="logout.php">Sair</a>
</body>
</html>