<?php
	include 'Connection.php';

	$codAtividade = $_GET['codAtividade'];

	$sql = "DELETE FROM atividade WHERE codAtividade = '$codAtividade'";
	$resultado = $connection->prepare($sql);
	$resultado -> execute();

	mysqli_close($connection);


?>

<script>
	alert("DADOS EXCLUÍDOS COM SUCESSO!");
	location.href= "../atividadesUsuario.php";
</script>