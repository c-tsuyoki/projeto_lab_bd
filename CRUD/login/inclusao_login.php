<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$login = $_POST["login"];
$senha_login = $_POST["senha_login"];
$tipo = $_POST["tipo"];
$id_cliente = $_POST["id_cliente"];
include('conexao.php');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include('conexao.php');
mysqli_begin_transaction($con) or die (mysqli_connect_error());

try{
	$query= "INSERT INTO login_usuarios (login, senha_login, tipo, id_cliente) VALUES ('$login', '$senha_login', '$tipo', '$id_cliente')";
	$resu = mysqli_query($con, $query);
	mysqli_commit($con);
	$_SESSION['msg'] = "<p style = 'color:blue;'> Login cadastrado com sucesso! </p>";
	header('Location: tela_cadastro_login.php');
}catch (mysqli_sql_exception $exception) {
	mysqli_rollback($con);
	
	throw $exception;
	$_session['msg'] = "<p style = 'color:red;'> Login não foi cadastrado! </p>";
	header('Location: tela_cadastro_login.php');
}

mysqli_close($con);

?>