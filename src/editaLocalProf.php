<?php
include 'Connection.php';

$codProfessor = $_POST['codProfessor'];
$nome_novo = $_POST['nome'];
$codLocal = $_POST['codLocal'];
$rua_nova = $_POST['rua'];
$cep_novo = $_POST['cep'];
$cidade_nova = $_POST['cidade'];
$estado_novo = $_POST['estado'];
$bairro_novo = $_POST['bairro'];
$precoAluguel_novo = $_POST['precoAluguel'];
$numero_novo = $_POST['numero'];


$consulta  = $connection->prepare( "UPDATE locais SET nome = '$nome_novo', codProfessor = '$codProfessor', numero = '$numero_novo', rua = '$rua_nova', cep = '$cep_novo', bairro = '$bairro_novo', precoAluguel = '$precoAluguel_novo', estado = '$estado_novo', cidade = '$cidade_nova'  WHERE codLocal = '$codLocal'");

$consulta->execute();

?>
<script>
	alert("DADOS ATUALIZADOS COM SUCESSO!");
	location.href = "./meuslocaisProf.php";
</script>
