<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$servico = $_POST["servico"];
$id_categoria = $_POST["id_categoria"];
include('conexao.php');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include('conexao.php');
mysqli_begin_transaction($con) or die (mysqli_connect_error());

try{
	$query= "INSERT INTO servicos (servico, id_categoria) VALUES ('$servico', '$id_categoria')";
	$resu = mysqli_query($con, $query);
	mysqli_commit($con);
	$_SESSION['msg'] = "";
	header('Location: tela_cadastro_servicos.php');
}catch (mysqli_sql_exception $exception) {
	mysqli_rollback($con);
	
	throw $exception;
	$_session['msg'] = "<p style = 'color:red;'> Serviço não foi cadastrado! </p>";
	header('Location: tela_cadastro_servicos.php');
}

mysqli_close($con);

?>