<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


$result = "SELECT * FROM categoria WHERE id = '$id'";
$resultado = mysqli_query($con, $result);
$row = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>CRUD - Editar</title>
	<link rel="stylesheet" href="style.php">

<body>


	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>

	<section class="sec">
		<header>
			<a href="#"><img src="./images/Relex.png" class="logo"></a>

			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Entrar</a></li>
				<li><a href="cadastro_cliente.php"><button class="btn">Cadastrar</button></a></li>

			</ul>
		</header>

		<div class="container">
			<div class="content">
				<form method="POST" action="proc_edit_categoria.php">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Categoria</span>
							<input type="text" name="categoria" size="90" value="<?php echo $row['categoria']; ?>">
						</div>
						

						
						<div class="button bt_ok">
							<a href="lista_prestador.php"><input type="submit" value="Salvar"></a>
						</div>


					</div>
				</form>

			</div>

		</div>


	</section>

</body>

</html>