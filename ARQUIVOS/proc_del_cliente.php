<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$result= "DELETE FROM clientes WHERE id='$id'";
$resultado= mysqli_query($con, $result);

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Cliente excluido com sucesso</p>";
	header("Location: lista_cliente.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Cliente não foi excluido</p>";
	header("Location: del_cliente.php?id=$id");
}	

?>