<?php
	include 'Connection.php';

	$codEquipamento = $_GET['codEquip'];

	$sql = "DELETE FROM equipamentos WHERE codEquip = '$codEquipamento'";
	$resultado = $connection->prepare($sql);
	$resultado -> execute();

	mysqli_close($connection);


?>

<script>
	alert("DADOS EXCLUÍDOS COM SUCESSO!");
	location.href= "../meusequipamentosU.php";
</script>