<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
?>


<!DOCTYPE html>

<html lang="pt-br" dir="ltr">

<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="style.php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<section class="sec">
		<header>
			<a href="#"><img src="./images/Relex.png" class="logo"></a>

			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="lista_cliente.php">Listar</a></li>
				<li><a href="login_cliente.php">Entrar</a></li>
				<li><a href="cadastro_cliente.php"><button class="btn">Cadastrar</button></a></li>

			</ul>
		</header>
		<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<div class="container">
			<div class="title">
				<a href="serviços.php"><button class="btn_cli btn_ex one" type="submit">Serviços</button></a>

			</div>
			<div class="content">
				<form method="POST" action="inclusao_servicos.php">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Serviço</span>
							<input type="text" size="80" name="servico" required>
						</div>
						<div class="input-box">
							<span class="details">Categoria</span>
							<select name="id_categoria">

								<?php
								include("conexao.php");
								$query = 'SELECT * FROM categoria ORDER BY categoria;';
								$resu = mysqli_query($con, $query) or die(mysqli_connect_error());
								while ($reg = mysqli_fetch_array($resu)) {
								?>
									<option value="<?php echo $reg['id']; ?>"> <?php echo $reg['categoria']; ?> </option>
								<?php

								}
								?>
							</select>
						</div>



					</div>


					<div class="button">
						<a href="lista_cliente.php"><input type="submit" value="Registrar"></a>
					</div>




				</form>
			</div>
		</div>


	</section>
</body>

</html>