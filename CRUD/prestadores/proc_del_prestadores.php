<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$result= "DELETE FROM prestadores WHERE id='$id'";
$resultado= mysqli_query($con, $result);

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Prestador excluido com sucesso</p>";
	header("Location: lista_prestadores.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Prestador não foi excluido</p>";
	header("Location: del_prestadores.php?id=$id");
}	

?>