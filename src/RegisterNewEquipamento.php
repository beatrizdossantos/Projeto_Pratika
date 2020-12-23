<?php
include 'Connection.php';
//$codEquip = $_POST['codEquip'];
$nome = $_POST['nome'];
$preço = $_POST['preço'];
$tempoHoras = $_POST['tempoHoras'];
$descricao = $_POST['descricao'];
$codProfessor = $_POST['codProfessor'];
//$codUsuario = $_POST['codUsuario'];


/*
$consultaCod = "SELECT codLocal FROM locais WHERE codLocal LIKE '$codLocal'";
$resultado = $connection->query($consultaCod);
$registros = $resultado->num_rows;

$resultado_consulta = mysqli_fetch_assoc($resultado);


	if ($registros>0){ ?>
		<script>
			alert("Esse código não está disponível");
			location.href = "../addLocalProf.php";
		</script> <?php  
	} elseif ($senha !== $re_senha) {?>
		<script>
			alert("As duas senhas devem ser iguais!");
			location.href = "../cadastro.php";
		</script> <?php
	}else{*/
		$consulta = $connection->prepare("INSERT INTO equipamentos (nome,preço,tempoHoras,descricao,codProfessor,codUsuario) VALUES ('$nome','$preço','$tempoHoras','$descricao','$codProfessor' NULL)");

        $consulta->execute();
	/*}*/
?>

<script>
	alert("EQUIPAMENTO ADICIONADO COM SUCESSO!");
	location.href = "addEquipProf.php";
</script>