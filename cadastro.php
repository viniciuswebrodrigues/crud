<?php include_once 'inc/header.php'; ?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<h1>Cadastro de Médicos!</h1>

<form action="CRUD/insert.php" method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome"><br></br>

    <label for="endereco">Endereco</label>
    <input type="text" name="endereco"><br></br>

    <label for="Sexo">Sexo</label>
    <select name="sexo" id="sexo">
        <option value=""></option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
    </select><br></br>

    <input type="submit" value="Enviar" name="sendCadastro">
</form>
<?php include_once 'inc/footer.php'; ?>   
</body>
</html>