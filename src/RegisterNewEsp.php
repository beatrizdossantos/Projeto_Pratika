<?php
include 'Connection.php';	
$nome = $_POST['nome'];
$diaNasc = $_POST['dia'];
$mesNasc = $_POST['mes'];
$anoNasc = $_POST['ano'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$re_senha = $_POST['re_pass'];
$formacao = $_POST['formacao'];

$consultaEmail = "SELECT email FROM especialistas WHERE email LIKE '$email'";
$resultado = $connection->query($consultaEmail);
$registros = $resultado->num_rows;

$resultado_consulta = mysqli_fetch_assoc($resultado);


	if ($registros>0){ ?>
		<script>
			alert("Esse email não está disponível!");
			location.href = "../insere_esp.php";
		</script> <?php  
	} elseif ($senha !== $re_senha) {?>
		<script>
			alert("As duas senhas devem ser iguais!");
			location.href = "../insere_esp.php";
		</script> <?php
	}else{
		$consulta = $connection->prepare("INSERT INTO especialistas (mes,dia,ano,senha,email,nome,formacao) VALUES ('$mesNasc','$diaNasc','$anoNasc','$senha','$email','$nome','$formacao')");

        $consulta->execute();
	}
?>

<script>
	alert("CADASTRADO COM SUCESSO!");
	location.href = "../adm.php";
</script>