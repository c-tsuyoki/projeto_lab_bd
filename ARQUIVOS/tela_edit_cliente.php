<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


$result = "SELECT * FROM clientes WHERE id = '$id'";
$resultado = mysqli_query($con, $result);
$row = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Editar</title>
	<link rel="stylesheet" href="style.php">

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
				<li><a href="#">Entrar</a></li>
				<li><a href="cadastro_cliente.php"><button class="btn">Cadastrar</button></a></li>

			</ul>
		</header>

		<div class="container">
			<div class="content">
				<form method="POST" action="proc_edit_cliente.php">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<div class="user-details">
						<div class="input-box">
							<span class="details">Nome</span>
							<input type="text" name="nome" size="90" value="<?php echo $row['nome']; ?>">
						</div>
						<div class="input-box">
							<span class="details">Endereço</span>
							<input type="text" name="endereco" size="90" value="<?php echo $row['endereco']; ?>">
						</div>
						<div class="input-box">
							<span class="details">Complemento</span>
							<input type="text" name="complemento" size="80" value="<?php echo $row['complemento']; ?>">
						</div>
						<div class="input-box">
							<span class="details">Bairro</span>
							<input type="text" name="bairro" size="90" value="<?php echo $row['bairro']; ?>">
						</div>
						<div class="input-box">
							<span class="details">Cidade</span>
							<input type="text" name="cidade" size="90" value="<?php echo $row['cidade']; ?>">
						</div>
						<div class="input-box">
							<span class="details">Estado</span>
							<input type="text" name="estado" size="80" value="<?php echo $row['estado']; ?>">
						</div>
						<div class="input-box">
							<span class="details">CPF/CNPJ</span>
							<input type="text" name="cpf_cnpj" size="90" value="<?php echo $row['cpf_cnpj']; ?>">
						</div>
						<div class="input-box">
							<span class="details">RG</span>
							<input type="text" name="rg" size="90" value="<?php echo $row['rg']; ?>">
						</div>
						<div class="input-box">
							<span class="details">Email</span>
							<input type="email" name="email" size="80" value="<?php echo $row['email']; ?>">
						</div>
						<div class="input-box">
							<span class="details">Telefone</span>
							<input type="text" name="telefone" size="90" value="<?php echo $row['telefone']; ?>">
						</div>
						<div class="input-box">
							<span class="details">Celular</span>
							<input type="text" name="celular" size="90" value="<?php echo $row['celular']; ?>">
						</div>
						<div class="input-box">
							<span class="details">CEP</span>
							<input type="text" name="cep" size="80" value="<?php echo $row['cep']; ?>">
						</div>
						<div class="button bt_ok">
							<a href="lista_cliente.php"><input type="button" value="Voltar"></a>
						</div>
						<br>
						<div class="button bt_ok">
							<a href="tela_prestador_login.php"><input type="submit" value="Salvar"></a>
						</div>


					</div>
				</form>

			</div>

		</div>


	</section>

</body>

</html>