<?php
include 'Connection.php';
$codProfessor = $_POST['codProfessor'];
$codEquip = $_POST['codEquip'];
$nome_novo = $_POST['nome'];
$descrição_nova = $_POST['descrição'];
$preço_novo = $_POST['preço'];
$tempoHoras_novo = $_POST['tempoHoras'];



$consulta  = $connection->prepare( "UPDATE equipamentos SET codProfessor='$codProfessor', nome = '$nome_novo', descrição = '$descrição_nova', preço = '$preço_novo', tempoHoras = '$tempoHoras_novo' WHERE codEquip = '$codEquip'");

$consulta->execute();

?>
<script>
	alert("DADOS ATUALIZADOS COM SUCESSO!");
	location.href = "./meusequipamentosProf.php";
</script>
