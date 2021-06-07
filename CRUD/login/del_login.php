<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result = "SELECT * FROM login_usuarios WHERE id LIKE '$id'";
$resultado = mysqli_query($con, $result);
$row = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Excluir</title>		
	</head>
	<body>
		<a href="lista_login.php">Listar</a><br>
		<h1>Excluir Login</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_del_login.php">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			
			<label>Login: </label>
			<input type="text" name="login" size="80" value="<?php echo $row['login']; ?>"><br><br>
						
			<input type="submit" value="Confirmar exclusão">
		</form>
	</body>
</html>