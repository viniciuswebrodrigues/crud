<?php
$banco = "estudos";
$usuario = "root";
$senha = "";

$conexao = new PDO('mysql:host=localhost;dbname='.$banco, $usuario, $senha);
$conexao->exec("SET CHARACTER SET utf8");

?>