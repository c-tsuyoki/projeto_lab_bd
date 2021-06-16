<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$categoria = $_POST["categoria"];
include('conexao.php');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include('conexao.php');
mysqli_begin_transaction($con) or die (mysqli_connect_error());

try{
	$query= "INSERT INTO categoria (categoria) VALUES ('$categoria')";
	$resu = mysqli_query($con, $query);
	mysqli_commit($con);
	$_SESSION['msg'] = "<p style = 'color:blue;'> Categoria cadastrada com sucesso! </p>";
	header('Location: tela_cadastro_categoria.php');
}catch (mysqli_sql_exception $exception) {
	mysqli_rollback($con);
	
	throw $exception;
	$_session['msg'] = "<p style = 'color:red;'> Categoria não foi cadastrada! </p>";
	header('Location: tela_cadastro_categoria.php');
}

mysqli_close($con);

?>