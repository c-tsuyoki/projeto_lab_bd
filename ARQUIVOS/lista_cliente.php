<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style_lista.php">
	<link rel="stylesheet" href="style.php">
	<title>CRUD - Listar</title>
</head>

<body>

	<section class="sec">
		<header>
			<a href="index.php"><img src="./images/Relex.png" class="logo"></a>

			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Listar</a></li>
				<li><a href="cadastro_cliente.php"><button class="btn">Sair</button></a></li>

			</ul>
		</header>

		<div class="login-boxer">
			<h1>Lista de clientes</h1>
			<ul class="ok_on2">

				<li><a href="lista_cliente.php"><button  class="btn_ ok">Cliente</button></a></li>
				<li><a href="lista_prestadores.php"><button class="btn_">Prestadores</button></a></li>
				<li><a href="lista_orcamentos.php"><button class="btn_">Orçamentos</button></a></li>
				<li><a href="lista_servicos.php"><button class="btn_">Serviços</button></a></li>
				<li><a href="lista_categoria.php"><button class="btn_">Categorias</button></a></li>
				<li><a href="lista_login.php"><button class="btn_">login</button></a></li>

			</ul>
			<div class="tab">
				<table class="craft-table">
					<th class="td0">id</th>
					<th>Nome</th>
					<th>Endereço</th>
					<th>Complemento</th>
					<th>Bairro</th>
					<th>Cidade</th>
					<th>Estado</th>
					<th>CPF/CNPJ</th>
					<th>RG</th>
					<th>Email</th>
					<th>Telefone</th>
					<th>Celular</th>
					<th>CEP</th>

					<?php
					if (isset($_SESSION['msg'])) {
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}

					//Receber o número da página
					$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
					$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

					//Setar a quantidade de itens por pagina
					$qnt_result_pg = 5;

					//calcular o inicio visualização
					$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

					$result_usuarios = "SELECT * FROM clientes LIMIT $inicio, $qnt_result_pg";
					$resultado_usuarios = mysqli_query($con, $result_usuarios);
					while ($row = mysqli_fetch_assoc($resultado_usuarios)) {
						echo "<tr class='total'><td class='line1'>" . $row['id'] . "</td><td> ";
						echo $row['nome'] . "</td><td >" . $row['endereco'] . "</td><td>" . $row['complemento'] . "</td><td>" . $row['bairro'] . "</td><td>" . $row['cidade'] . "</td><td>" . $row['estado'] . "</td><td>" . $row['cpf_cnpj'] . "</td><td>" . $row['rg'] . "</td><td>" . $row['email'] . "</td><td>" . $row['telefone'] . "</td><td>" . $row['celular'] . "</td><td>" . $row['cep'] . "</td><td> <a class='ed' href='tela_edit_cliente.php?id=" . $row['id'] . "'>Editar</a>";
						echo "</td><td> <a class='ed' href='del_cliente.php?id=" . $row['id'] . "'>Deletar</a></td></tr>";
					}
					echo "</table>";
					//Paginação - Somar a quantidade de usuários
					?>
			</div>
			
		</div>
	</section>
</body>

</html>