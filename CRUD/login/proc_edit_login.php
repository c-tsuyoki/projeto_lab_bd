<?php
session_start();
include_once("conexao.php");

$id = $_POST["id"];
$login = $_POST["login"];
$senha_login = $_POST["senha_login"];
$tipo = $_POST["tipo"];
$id_cliente = $_POST["id_cliente"];

$result= "UPDATE login_usuarios SET login='$login', senha_login='$senha_login', tipo='$tipo', id_cliente='$id_cliente' WHERE id='$id'";
$resultado= mysqli_query($con, $result);


if(mysqli_affected_rows($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Login alterado com sucesso</p>";
	header("Location: lista_login.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Login não foi alterado</p>";
	header("Location: lista_login.php");
}

?>
