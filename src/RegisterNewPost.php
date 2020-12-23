<?php
include 'Connection.php';	
$codEsp = $_POST['codEspecialista'];
$assunto = $_POST['assunto'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];


$consulta = $connection->prepare("INSERT INTO areavippost (assunto,titulo,conteudoPost,codEsp) VALUES ('$assunto','$titulo','$conteudo', '$codEsp')");

$consulta->execute();

?>

<script>
	alert("CADASTRADO COM SUCESSO!");
	location.href = "../esp.php";
</script>