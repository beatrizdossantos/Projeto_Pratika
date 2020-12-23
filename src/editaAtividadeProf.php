<?php
include 'Connection.php';
$CodProf = $_POST['CodProf'];
$codAtividade = $_POST['codAtividade'];
$codLocal = $_POST['codLocal'];
$nome_novo = $_POST['nome'];
$modalidade_novo = $_POST['modalidade'];
$dia_novo = $_POST['dia'];
$mes_novo = $_POST['mes'];
$ano_novo = $_POST['ano'];
$horario_novo = $_POST['horario'];
$preco_novo = $_POST['preco'];
$aula_novo = $_POST['aula'];
$publica_novo = $_POST['publica'];
$descricao_novo = $_POST['descricao'];



$consulta  = $connection->prepare( "UPDATE atividade SET CodProf = '$CodProf', codLocal = '$codLocal', nome = '$nome_novo', modalidade = '$modalidade_novo', dia = '$dia_novo', mes = '$mes_novo', ano = '$ano_novo', horario = '$horario_novo', preco = '$preco_novo', aula = '$aula_novo', publica = '$publica_novo', descricao = '$descricao_novo' WHERE codAtividade = '$codAtividade'");

$consulta->execute();

?>
<script>
	alert("DADOS ATUALIZADOS COM SUCESSO!");
	location.href = "./atividadesProf.php";
</script>
