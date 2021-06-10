<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result = "SELECT * FROM prestadores WHERE id LIKE '$id'";
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
		<a href="lista_prestadores.php">Listar</a><br>
		<h1>Excluir Prestador</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_del_prestadores.php">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			
			<label>Cliente: </label>
			<input type="text" name="nome" size="80" value="<?php echo $row['nome']; ?>"><br><br>
						
			<input type="submit" value="Confirma exclusão">
		</form>
	</body>
</html>