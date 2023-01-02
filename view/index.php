<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once("../model/clienteDAO.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVM</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/cliente.css">
</head>
<body>
    <div class="box">
        <div class="side-menu">
            <?php
                require_once('side_menu.html');
            ?>
        </div>
        <div class="content">
            <?php
                if(isset($_POST["funcao"])) {
                    $_SESSION["funcao"] = $_POST["funcao"];
                }
                if($_SESSION["funcao"] == "cliente") {
                    require_once('cliente_content.php');
                } else if($_SESSION["funcao"] == "ordem") {
                    require_once('ordem_content.php');
                }
            ?>
        </div>
    </div>
</body>
</html>