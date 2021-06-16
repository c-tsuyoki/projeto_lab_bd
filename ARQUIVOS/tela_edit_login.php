<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


$result = "SELECT * FROM login_usuarios WHERE id='$id'";
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
		<a href="tela_cadastro_login.php">Cadastrar</a><br>
		<a href="lista_login.php">Listar</a><br>
		<h1>Alteração - Login</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_login.php">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			
			<label>Login: </label>
			<input type="text" name="login" size="90" value="<?php echo $row['login']; ?>"><br><br>
            <label>Senha: </label>
			<input type="password" name="senha_login" size="90" value="<?php echo $row['senha_login']; ?>"><br><br>
            <label>Tipo: </label>
			<input type="text" name="tipo" size="90" value="<?php echo $row['tipo']; ?>"><br><br>
			<label>Cliente: </label>
			<select name="id_cliente">
			<option value="<?php echo $row['id_cliente'];?>"> <?php echo $row['id_cliente'];?> </option> 
			<?php
			   $query= 'SELECT * FROM clientes ORDER BY nome;';
		       $resu = mysqli_query($con,$query) or die(mysqli_connect_error());
		       while ($reg = mysqli_fetch_array($resu)){
				  				   
            ?>
            <option value="<?php echo $reg['id'];?>"> <?php echo $reg['nome'];?> </option> 
		    <?php
		      }
		    ?>  
		    </select>
				
							
			<p><input type="submit" value="Salvar">
		</form>
	</body>
</html>