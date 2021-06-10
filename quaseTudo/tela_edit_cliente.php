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
		<title>CRUD - Editar</title>		
	</head>
	<body>
		<a href="tela_cadastro_cliente.php">Cadastrar</a><br>
		<a href="lista_cliente.php">Listar</a><br>
		<h1>Alteração - Cliente</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_cliente.php">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" size="90" value="<?php echo $row['nome']; ?>"><br><br>
			<label>Endereço: </label>
			<input type="text" name="endereco" size="90" value="<?php echo $row['endereco']; ?>"><br><br>
			<label>Complemento: </label>
			<input type="text" name="complemento" size="80" value="<?php echo $row['complemento']; ?>"><br><br>
			<label>Bairro: </label>
			<input type="text" name="bairro" size="90" value="<?php echo $row['bairro']; ?>"><br><br>
			<label>Cidade: </label>
			<input type="text" name="cidade" size="90" value="<?php echo $row['cidade']; ?>"><br><br>
			<label>Estado: </label>
			<input type="text" name="estado" size="80" value="<?php echo $row['estado']; ?>"><br><br>
			<label>CPF/CNPJ: </label>
			<input type="text" name="cpf_cnpj" size="90" value="<?php echo $row['cpf_cnpj']; ?>"><br><br>
			<label>RG: </label>
			<input type="text" name="rg" size="90" value="<?php echo $row['rg']; ?>"><br><br>
			<label>Email: </label>
			<input type="email" name="email" size="80" value="<?php echo $row['email']; ?>"><br><br>
			<label>Telefone: </label>
			<input type="text" name="telefone" size="90" value="<?php echo $row['telefone']; ?>"><br><br>
			<label>Celular: </label>
			<input type="text" name="celular" size="90" value="<?php echo $row['celular']; ?>"><br><br>
			<label>CEP: </label>
			<input type="text" name="cep" size="80" value="<?php echo $row['cep']; ?>"><br><br>
			 
			
				
							
			<p><input type="submit" value="Salvar">
		</form>
	</body>
</html>