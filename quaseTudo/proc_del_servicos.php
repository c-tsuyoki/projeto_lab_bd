<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);

$result= "DELETE FROM servicos WHERE id='$id'";
$resultado= mysqli_query($con, $result);

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Serviço excluido com sucesso</p>";
	header("Location: lista_servicos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Serviço não foi excluido</p>";
	header("Location: del_servicos.php?id=$id");
}	

?>