<?php
session_start();
include_once("conexao.php");

$id = $_POST["id"];
$servico = $_POST["servico"];
$id_categoria = $_POST["id_categoria"];

$result= "UPDATE servicos SET servico='$servico', id_categoria='$id_categoria' WHERE id='$id'";
$resultado= mysqli_query($con, $result);


if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Serviço alterado com sucesso</p>";
	header("Location: lista_servicos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Serviço não foi alterado</p>";
	header("Location: tela_edit_servicos.php");
}

?>
