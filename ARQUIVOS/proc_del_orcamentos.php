<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_STRING);

$result= "DELETE FROM orcamentos WHERE id='$id'";
$resultado= mysqli_query($con, $result);

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Orçamento excluido com sucesso</p>";
	header("Location: lista_orcamentos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Orçamentos não foi excluido</p>";
	header("Location: del_orcamentos.php?id=$id");
}	

?>