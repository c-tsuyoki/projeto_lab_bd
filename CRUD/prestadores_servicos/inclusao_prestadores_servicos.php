<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$id_prestador = $_POST["id_prestador"];
$id_servico = $_POST["id_servico"];
include('conexao.php');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include('conexao.php');
mysqli_begin_transaction($con) or die (mysqli_connect_error());

try{
	$query= "INSERT INTO prestadores_servicos (id_prestador, id_servico) VALUES ('$id_prestador', '$id_servico')";
	$resu = mysqli_query($con, $query);
	mysqli_commit($con);
	$_SESSION['msg'] = "<p style = 'color:blue;'> Prestador e Serviço cadastrados com sucesso! </p>";
	header('Location: tela_cadastro_prestadores_servicos.php');
}catch (mysqli_sql_exception $exception) {
	mysqli_rollback($con);
	
	throw $exception;
	$_session['msg'] = "<p style = 'color:red;'> Prestador e Serviço não foram cadastrados! </p>";
	header('Location: tela_cadastro_pretadores_servicos.php');
}

mysqli_close($con);

?>