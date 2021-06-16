<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result = "SELECT * FROM categoria WHERE id LIKE '$id'";
$resultado = mysqli_query($con, $result);
$row = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Excluir</title>
	<link rel="stylesheet" href="style.php">
	<link rel="stylesheet" href="style_lista.php">

</head>

<body>

	<section class="sec">
		<header>
			<a href="#"><img src="./images/Relex.png" class="logo"></a>

			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="lista_cliente.php">listar</a></li>
				<li><a href="cadastro_cliente.php"><button class="btn">Sair</button></a></li>

			</ul>
		</header>

		<div class="container pk">
			<div class="content">

				<?php
				if (isset($_SESSION['msg'])) {
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>

				<form method="POST" action="proc_del_categoria.php">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Categoria</span>
							<input type="text" name="nome" size="80" value="<?php echo $row['categoria']; ?>">
						</div>

						<div class="button">
							<a href="lista_cliente.php"><input type="submit" value="Deletar"></a>
						</div>


					</div>
				</form>

			</div>

		</div>


	</section>

</body>

</html>