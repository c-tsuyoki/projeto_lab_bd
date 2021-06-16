<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);

$result= "DELETE FROM categoria WHERE id='$id'";
$resultado= mysqli_query($con, $result);

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Categoria excluida com sucesso</p>";
	header("Location: lista_categoria.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Categoria não foi excluido</p>";
	header("Location: del_categoria.php?id=$id");
}	

?>