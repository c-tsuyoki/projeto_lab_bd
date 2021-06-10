<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result = "SELECT * FROM servicos WHERE id LIKE '$id'";
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
		<a href="lista_servicos.php">Listar</a><br>
		<h1>Excluir Serviços</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_del_servicos.php">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			
			<label>Servicos: </label>
			<input type="text" name="servico" size="80" value="<?php echo $row['servico']; ?>"><br><br>
						
			<input type="submit" value="Confirmar exclusão">
		</form>
	</body>
</html>