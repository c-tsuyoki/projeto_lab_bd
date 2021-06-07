<?php
	session_start();
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
		<a href="tela_cadastro_login.php">Cadastrar</a><br>

		<h1>Listar Login</h1>
		<table border="1" width="100%">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 15;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM login_usuarios LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($con, $result_usuarios);
		while($row = mysqli_fetch_assoc($resultado_usuarios)){
			echo "<tr><td>" . $row['id'] . "</td><td> "; 
			echo $row['login'] . "</td><td>". $row['tipo'] . "</td><td>". $row['id_cliente'] . "</td><td> <a href='tela_edit_login.php?id=". $row['id'] . "'>Editar</a>";
			echo "</td><td> <a href='del_login.php?id=". $row['id'] . "'>Excluir </a></td></tr>";
		}
		echo "</table>";
		//Paginação - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM login_usuarios";
		$resultado_pg = mysqli_query($con, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='lista_login.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='lista_login.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='lista_login.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		echo "<a href='lista_login.php?pagina=$quantidade_pg'>Última</a>";
		?>		
	</body>
</html>