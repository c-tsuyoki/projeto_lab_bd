<?php
session_start();
include_once("conexao.php");

$id = $_POST["id"];
$data = $_POST["data"];
$valor = $_POST["valor"];
$id_prestador = $_POST["id_prestador"];
$data_expiracao = $_POST["data_expiracao"];
$id_cliente = $_POST["id_cliente"];
$id_servico = $_POST["id_servico"];
$observacao = $_POST["observacao"];

$result= "UPDATE orcamentos SET data='$data', valor='$valor', id_prestador='$id_prestador', data_expiracao='$data_expiracao', id_cliente='$id_cliente',
id_servico='$id_servico', observacao='$observacao' WHERE id='$id'";
$resultado= mysqli_query($con, $result);

//echo "<br>".mysqli_affected_rows;

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Orçamento alterado com sucesso</p>";
	header("Location: lista_orcamentos.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Orçamento não foi alterado</p>";
	header("Location: tela_edit_orcamentos.php?id=$id");
}

?>