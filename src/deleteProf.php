<?php
	include 'Connection.php';

	$codProfessor = $_GET['codProfessor'];

	$sql = "DELETE FROM professores WHERE codProfessor = '$codProfessor'";
	$resultado = $connection->prepare($sql);
	$resultado -> execute();

	mysqli_close($connection);


?>

<script>
	alert("DADOS EXCLUÍDOS COM SUCESSO!");
	location.href= "../login.php";
</script>