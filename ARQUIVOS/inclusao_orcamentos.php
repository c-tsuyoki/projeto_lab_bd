<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$data = $_POST["data"];
$valor = $_POST["valor"];
$id_prestador = $_POST["id_prestador"];
$data_expiracao = $_POST["data_expiracao"];
$id_cliente = $_POST["id_cliente"];
$id_servico = $_POST["id_servico"];
$observacao = $_POST["observacao"];
include('conexao.php');


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include('conexao.php');
mysqli_begin_transaction($con) or die (mysqli_connect_error());

try{
	$query= "INSERT INTO orcamentos (data, valor, id_prestador, data_expiracao, id_cliente, id_servico, observacao) VALUES ('$data', '$valor', '$id_prestador', '$data_expiracao',
    '$id_cliente', '$id_servico', '$observacao')";
	$resu = mysqli_query($con, $query);
	mysqli_commit($con);
	$_SESSION['msg'] = "<p style = 'color:blue;'> Orçamento cadastrado com sucesso! </p>";
	header('Location: tela_cadastro_orcamentos.php');
}catch (mysqli_sql_exception $exception) {
	mysqli_rollback($con);
	
	throw $exception;
	$_session['msg'] = "<p style = 'color:red;'> Orçamento não foi cadastrado! </p>";
	header('Location: tela_cadastro_orcamentos.php');
}

mysqli_close($con);

?>