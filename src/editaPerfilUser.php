<?php
include 'Connection.php';

$codUser = $_POST['codUsuario'];
$nome_novo = $_POST['nome'];
$senha_nova = $_POST['senha'];
$mes_novo = $_POST['mes'];
$dia_novo = $_POST['dia'];
$ano_novo = $_POST['ano'];
$email_novo = $_POST['email'];
$estado_novo = $_POST['estado'];
$cidade_nova = $_POST['cidade'];


		$consulta  = $connection->prepare( "UPDATE usuarios SET nome = '$nome_novo', senha = '$senha_nova', mes = '$mes_novo', dia = '$dia_novo', ano = '$ano_novo', email ='$email_novo', estado = '$estado_novo', cidade = '$cidade_nova' WHERE codUsuario = '$codUser'");

		$consulta->execute();


?>
<script>
	alert("DADOS ATUALIZADOS COM SUCESSO!");
	location.href = "./perfilUser.php";
</script>
