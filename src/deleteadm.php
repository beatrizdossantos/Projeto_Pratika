	<?php
		include 'Connection.php';

		$codAdmin = $_GET['codAdmin'];

		$sql = "DELETE FROM administradores WHERE codAdmin = '$codAdmin'";
		$resultado = $connection->prepare($sql);
		$resultado -> execute();

		mysqli_close($connection);


	?>

	<script>
		alert("DADOS EXCLUÍDOS COM SUCESSO!");
		location.href= "../adm.php";
	</script>