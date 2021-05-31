<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$cep = $_POST["cep"];
include('conexao.php');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include('conexao.php');
mysqli_begin_transaction($con) or die (mysqli_connect_error());

try{
	$query= "INSERT INTO prestadores (nome, endereco, complemento, bairro, cidade, estado, email, telefone, celular, cep) VALUES ('$nome', '$endereco', '$complemento', '$bairro', '$cidade', '$estado', '$email', '$telefone', '$celular', '$cep')";
	$resu = mysqli_query($con, $query);
	mysqli_commit($con);
	$_SESSION['msg'] = "<p style = 'color:blue;'> Prestador cadastrado com sucesso! </p>";
	header('Location: tela_cadastro_prestadores.php');
}catch (mysqli_sql_exception $exception) {
	mysqli_rollback($con);
	
	throw $exception;
	$_session['msg'] = "<p style = 'color:red;'> Prestador não foi cadastrado! </p>";
	header('Location: tela_cadastro_prestadores.php');
}

mysqli_close($con);

?>