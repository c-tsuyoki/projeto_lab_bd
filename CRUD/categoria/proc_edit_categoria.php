<?php
session_start();
include_once("conexao.php");

$id = $_POST["id"];
$categoria = $_POST["categoria"];

$result= "UPDATE categoria SET categoria='$categoria' WHERE id='$id'";
$resultado= mysqli_query($con, $result);

//echo "<br>".mysqli_affected_rows;

if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Categoria alterada com sucesso</p>";
	header("Location: lista_categoria.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Categoria não foi alterada</p>";
	header("Location: tela_edit_categoria.php?id=$id");
}

?>