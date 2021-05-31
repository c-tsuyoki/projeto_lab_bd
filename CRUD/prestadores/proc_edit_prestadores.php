<?php
session_start();
include_once("conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$cep = $_POST["cep"];

$result= "UPDATE prestadores SET nome='$nome', endereco='$endereco', complemento='$complemento', bairro='$bairro', cidade='$cidade', estado='$estado', email='$email', telefone='$telefone', celular='$celular', cep='$cep' WHERE id='$id'";
$resultado= mysqli_query($con, $result);

//echo "<br>".mysqli_affected_rows;

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Prestador alterado com sucesso</p>";
	header("Location: lista_prestadores.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Prestador não foi alterado</p>";
	header("Location: tela_edit_prestadores.php?id=$id");
}

?>