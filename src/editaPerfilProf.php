<?php
include 'Connection.php';

$codProfessor = $_POST['codProfessor'];
$nome_novo = $_POST['nome'];
$senha_nova = $_POST['senha'];
$mes_novo = $_POST['mes'];
$dia_novo = $_POST['dia'];
$ano_novo = $_POST['ano'];
$email_novo = $_POST['email'];
$formacao_nova = $_POST['formacao'];
$modalidadeAula_nova = $_POST['modalidadeAula'];
$estado_novo = $_POST['estado'];
$cidade_nova = $_POST['cidade'];

$consulta  = $connection->prepare( "UPDATE professores SET nome = '$nome_novo', senha = '$senha_nova', mes = '$mes_novo', dia = '$dia_novo', ano = '$ano_novo', email ='$email_novo', formacao = '$formacao_nova', modalidadeAula = '$modalidadeAula_nova', estado = '$estado_novo', cidade = '$cidade_nova'  WHERE codProfessor = '$codProfessor'");

$consulta->execute();

?>
<script>
	alert("DADOS ATUALIZADOS COM SUCESSO!");
	location.href = "./perfilProf.php";
</script>
