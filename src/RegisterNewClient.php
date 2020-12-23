<?php
include 'Connection.php';
$nome = $_POST['name'];
$diaNasc = $_POST['diaNasc'];
$mesNasc = $_POST['mesNasc'];
$anoNasc = $_POST['anoNasc'];
$email = $_POST['email'];
$senha = $_POST['pass'];
$re_senha = $_POST['re_pass'];


$consultaEmail = "SELECT email FROM usuarios WHERE email LIKE '$email'";
$resultado = $connection->query($consultaEmail);
$registros = $resultado->num_rows;

$resultado_consulta = mysqli_fetch_assoc($resultado);


	if ($registros>0){ ?>
		<script>
			alert("Esse email não está disponível!");
			location.href = "../cadastro.php";
		</script> <?php  
	} elseif ($senha !== $re_senha) {?>
		<script>
			alert("As duas senhas devem ser iguais!");
			location.href = "../cadastro.php";
		</script> <?php
	}else{
		$consulta = $connection->prepare("INSERT INTO usuarios (mes,dia,ano,estado,senha,email,nome,cidade,premium) VALUES ('$mesNasc','$diaNasc','$anoNasc','','$senha','$email','$nome','',0)");

        $consulta->execute();
	}
?>

<script>
	alert("CADASTRADO COM SUCESSO!");
	location.href = "../login.php";
</script>

