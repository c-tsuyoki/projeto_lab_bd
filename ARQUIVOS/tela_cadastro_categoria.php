
<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result = "SELECT * FROM clientes WHERE id LIKE '$id'";
$resultado = mysqli_query($con, $result);
$row = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Editar</title>
	<link rel="stylesheet" href="style.php">
	<link rel="stylesheet" href="style_lista.php">

</head>

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
				<li><a href="#">listar</a></li>
				<li><a href="cadastro_cliente.php"><button class="btn">Voltar</button></a></li>

			</ul>
		</header>

		<div class="container pk">
			<div class="content">
			<form method="POST" action="inclusao_categoria.php">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Categoria</span>
							<input type="text" size="80" name="categoria" required>
						</div>

						<div class="button">
							<a href="adm.php"><input type="submit" value="Cadastrar"></a>
						</div>


					</div>
				</form>

			</div>

		</div>


	</section>

</body>

</html>