<?php
include 'connection.php';

$codAdmin = $_POST['codAdmin'];
$nome_novo = $_POST['nome_novo'];
$senha_nova = $_POST['senha_nova'];
$mes_novo = $_POST['mes_novo'];
$dia_novo = $_POST['dia_novo'];
$ano_novo = $_POST['ano_novo'];
$email_novo = $_POST['email_novo'];


$sql = "UPDATE administradores SET nome = '$nome_novo', senha = '$senha_nova', mes = '$mes_novo', dia = '$dia_novo', ano = '$ano_novo', email ='$email_novo'  WHERE codAdmin = '$codAdmin'";

$resultado = $connection->prepare($sql);

$resultado->execute()
?>

<script>
	alert("DADOS ATUALIZADOS COM SUCESSO!");
	location.href = "../adm.php";
</script>	