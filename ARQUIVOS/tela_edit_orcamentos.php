<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


$result = "SELECT * FROM orcamentos WHERE id='$id'";
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
				<form method="POST" action="proc_edit_orcamentos.php">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<div class="user-details">
						<div class="input-box">
							<span class="details">data</span>
							<input type="date" name="data" value="<?php echo $row['data']; ?>">
						</div>
						<div class="input-box">
							<span class="details">valor</span>
							<input type="text" name="valor" size="90" value="<?php echo $row['valor']; ?>">
						</div>
						<div class="input-box">
							<span class="details">prestador</span>
							<select name="id_prestador">
								<option value="<?php echo $row['id_prestador']; ?>"> <?php echo $row['id_prestador']; ?> </option>
								<?php
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
							<span class="details">Data de expiração</span>
							<input type="date" name="data_expiracao" value="<?php echo $row['data_expiracao']; ?>">
						</div>
						<div class="input-box">
							<span class="details">Cliente</span>
							<select name="id_cliente">
								<option value="<?php echo $row['id_cliente']; ?>"> <?php echo $row['id_cliente']; ?> </option>
								<?php
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
							<span class="details">Serviço</span>
							<select name="id_servico">
								<option value="<?php echo $row['id_servico']; ?>"> <?php echo $row['id_servico']; ?> </option>
								<?php
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
							<input type="text" name="observacao" size="90" value="<?php echo $row['observacao']; ?>">
						</div>


						<br>
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