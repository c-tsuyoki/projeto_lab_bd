<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$login = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);

$result= "DELETE FROM login_usuarios WHERE id='$id'";
$resultado= mysqli_query($con, $result);

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Login excluido com sucesso</p>";
	header("Location: lista_login.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Login não foi excluido</p>";
	header("Location: del_login.php?id=$id");
}	

?>