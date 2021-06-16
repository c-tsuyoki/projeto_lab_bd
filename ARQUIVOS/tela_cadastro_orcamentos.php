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
				<a href="cadastro_cliente.php"><button class="btn_cli btn_ex one" type="submit">Orçamento</button></a>

			</div>
			<div class="content">
				<form method="POST" action="inclusao_orcamentos.php">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Data</span>
							<input type="date" name="data" required>
						</div>
						<div class="input-box">
							<span class="details">Valor</span>
							<input type="text" size="80" name="valor" required>
						</div>
						<div class="input-box">
							<Span class="details"> Prestador: </Span>
							<select name="id_prestador">
								<?php
								include("conexao.php");
								$query = 'SELECT * FROM prestadores ORDER BY nome;';
								$resu = mysqli_query($con, $query) or die(mysqli_connect_error());
								while ($reg = mysqli_fetch_array($resu)) {
								?>
									<option value="<?php echo $reg['id']; ?>"> <?php echo $reg['nome']; ?> </option>
								<?php

								}
								?>
							</select>
						</div>

						<div class="input-box">
							<span class="details">Data de expiração:</span>
							<input type="date" name="data_expiracao" required>
						</div>
						<div class="input-box">
							<span class="details">Cliente</span>
							<select name="id_cliente">
								<?php
								include("conexao.php");
								$query = 'SELECT * FROM clientes ORDER BY nome;';
								$resu = mysqli_query($con, $query) or die(mysqli_connect_error());
								while ($reg = mysqli_fetch_array($resu)) {
								?>
									<option value="<?php echo $reg['id']; ?>"> <?php echo $reg['nome']; ?> </option>
								<?php

								}
								?>
							</select>
						</div>
						<div class="input-box">
							<span class="details">Serviços</span>
							<select name="id_servico">
								<?php
								include("conexao.php");
								$query = 'SELECT * FROM servicos ORDER BY servico;';
								$resu = mysqli_query($con, $query) or die(mysqli_connect_error());
								while ($reg = mysqli_fetch_array($resu)) {
								?>
									<option value="<?php echo $reg['id']; ?>"> <?php echo $reg['servico']; ?> </option>
								<?php

								}
								?>
							</select>
						</div>
						<div class="input-box">
							<span class="details">Observação</span>
							<input type="text" size="80" name="observacao" required>
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