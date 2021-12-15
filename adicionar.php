<?php
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="crud/insert.php" method="POST">
    <label for="">Nome</label>
    <input type="text" name="nome"><br><br>

    <label for="">Idade</label>
    <input type="text" name="idade"><br><br>

    <input type="submit" value="Enviar" name="SendEnviar">
</form>
</body>
</html>