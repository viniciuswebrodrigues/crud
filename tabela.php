<?php 
include_once 'inc/header.php';
include_once 'bd/conexao.php';


$sql = "SELECT * FROM medicos";
                
$consulta = $conexao->query($sql);
$consulta->execute();

$result = $consulta->fetchAll();

//var_dump($result);

echo '<table class="table table-responsive">';
    echo '<tr>';
		echo '<th>Nome</th>';
        echo '<th>Endereço</th>';
        echo '<th>Sexo</th>';
        echo '<th>Editar</th>';
        echo '<th>Excluir</th>';
    echo '</tr>';

foreach($result as $consulta) {
    echo '<tr>';
        echo '<td>'.$consulta['nome'].'</td>';
		echo '<td>'.$consulta['endereco'].'</td>';
		echo '<td>'.$consulta['sexo'].'</td>';
        echo '<td>'."<a href='editar.php?id=".$consulta['id']."'>Editar</a>".'</td>';
        echo '<td>'."<a href='excluir.php?id=".$consulta['id']."'>Excluir</a>".'</td>';
    echo '</tr>';
}
echo '</table>';
include_once 'inc/footer.php';