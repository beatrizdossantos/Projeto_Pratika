<?php
include 'Connection.php';
$nome = $_POST['nome'];
$precoAluguel = $_POST['precoAluguel'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$codUser = $_POST['codUsuario'];


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
		$consulta = $connection->prepare("INSERT INTO locais (nome,precoAluguel,rua,cep,numero,bairro,estado,cidade,codUsuario) VALUES ('$nome','$precoAluguel','$rua','$cep','$numero','$estado','$cidade','$bairro','$codUser')");

        $consulta->execute();
	/*}*/
?>

<script>
	alert("LOCAL ADICIONADO COM SUCESSO!");
	location.href = "meuslocaisU.php";
</script>