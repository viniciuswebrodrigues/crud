<?php
include_once 'inc/header.php';
include_once 'bd/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir médico</title>
</head>
<body>

<?php
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT * FROM medicos WHERE id = $id";
$stmt = $conexao->prepare($sql);
$stmt->execute();

$row_cont = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form action="CRUD/delete.php" method="POST">
<label for="id"></label>
    <input type="hidden" name="id" value="<?php if(isset($row_cont['id'])) {echo $row_cont['id'];} ?>">

    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?php if(isset($row_cont['nome'])) {echo $row_cont['nome'];} ?>"><br><br>

    <label for="endereco">Endereço</label>
    <input type="text" name="endereco" value="<?php if(isset($row_cont['endereco'])) {echo $row_cont['endereco'];} ?>"><br><br>

    <label for="sexo">Sexo</label>
    <input type="text" name="sexo" value="<?php if(isset($row_cont['sexo'])) {echo $row_cont['sexo'];} ?>"><br><br>

    <input type="submit" value="Enviar" name="sendDell">
</form>

<?php include_once 'inc/footer.php'; ?>
</body>
</html>
