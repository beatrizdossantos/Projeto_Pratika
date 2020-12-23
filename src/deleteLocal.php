<?php
	include 'Connection.php';

	$codLocal = $_GET['codLocal'];

	$sql = "DELETE FROM locais WHERE codLocal = '$codLocal'";
	$resultado = $connection->prepare($sql);
	$resultado -> execute();

	mysqli_close($connection);


?>

<script>
	alert("DADOS EXCLUÍDOS COM SUCESSO!");
	location.href= "../meuslocaisU.php";
</script>