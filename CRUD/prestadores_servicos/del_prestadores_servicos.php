<?php
session_start();
include_once("conexao.php");
$id_prestador = filter_input(INPUT_GET, 'id_prestador', FILTER_SANITIZE_NUMBER_INT);
$result = "SELECT * FROM prestadores_servicos WHERE id_prestador LIKE '$id_prestador'";
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
		<a href="lista_prestadores_servicos.php">Listar</a><br>
		<h1>Excluir Prestador e Serviço</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_del_prestadores_servicos.php">
			<input type="hidden" name="id_prestador" value="<?php echo $row['id_prestador']; ?>">
			
			<label>Serviço: </label>
			<input type="text" name="id_servico" size="80" value="<?php echo $row['id_servico']; ?>"><br><br>
						
			<input type="submit" value="Confirmar exclusão">
		</form>
	</body>
</html>