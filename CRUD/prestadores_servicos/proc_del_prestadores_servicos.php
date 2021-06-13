<?php
session_start();
include_once("conexao.php");

$id_prestador = filter_input(INPUT_POST, 'id_prestador', FILTER_SANITIZE_NUMBER_INT);
$id_servico = filter_input(INPUT_POST, 'id_servico', FILTER_SANITIZE_STRING);

$result= "DELETE FROM prestadores_servicos WHERE id_prestador='$id_prestador'";
$resultado= mysqli_query($con, $result);

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Prestador e Serviço excluidos com sucesso</p>";
	header("Location: lista_prestadores_servicos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Prestador e Serviço não foram excluidos</p>";
	header("Location: del_prestadores_servicos.php?id_prestador=$id_prestador");
}	

?>