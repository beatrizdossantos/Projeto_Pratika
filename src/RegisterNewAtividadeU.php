<?php
include 'Connection.php';
$nome = $_POST['nome'];
$CodUser = $_POST['codUsuario'];
$CodLocal = $_POST['codLocal'];
$preco = $_POST['preco'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$horario = $_POST['horario'];
$modalidade = $_POST['modalidade'];
$publica = $_POST['publica'];
$aula = $_POST['aula'];
$descricao = $_POST['descricao'];

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
		$consulta = $connection->prepare("INSERT INTO atividade (CodUsuario,nome,preco,dia,mes,ano,horario,modalidade,publica,codLocal,aula,descricao) VALUES ('$CodUser','$nome','$preco','$dia','$mes','$ano','$horario','$modalidade','$publica','$CodLocal','$aula','$descricao')");

        $consulta->execute();
	/*}*/
?>

<script>
	alert("ATIVIDADE ADICIONADA COM SUCESSO!");
	location.href = "atividadesUsuario.php";
</script>