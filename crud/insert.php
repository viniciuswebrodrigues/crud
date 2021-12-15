<?php 

include "../conexao.php";

$SendEnviar = filter_input(INPUT_POST, 'SendEnviar', FILTER_SANITIZE_STRING);
if($SendEnviar) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
}

$sql = "INSERT INTO pessoas (nome, idade) VALUES(:nome, :idade)";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam('nome', $nome);
    $stmt->bindParam('idade', $idade);

if($stmt->execute()) {
    echo 'Enviado com sucesso!';
}else{
    echo 'Não foi possível enviar';
}

?>
