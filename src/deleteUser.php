<?php
	include 'Connection.php';

	$codUsuario = $_GET['codUsuario'];

	$sql = "DELETE FROM usuarios WHERE codUsuario = '$codUsuario'";
	$resultado = $connection->prepare($sql);
	$resultado -> execute();

	mysqli_close($connection);


?>

<script>
	alert("DADOS EXCLUÍDOS COM SUCESSO!");
	location.href= "../login.php";
</script>