<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


$result = "SELECT * FROM servicos WHERE id='$id'";
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
		<a href="tela_cadastro_servicos.php">Cadastrar</a><br>
		<a href="lista_servicos.php">Listar</a><br>
		<h1>Alteração - Serviços</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_servicos.php">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			
			<label>Serviço: </label>
			<input type="text" name="servico" size="90" value="<?php echo $row['servico']; ?>"><br><br>
			<label>Categoria: </label>
			<select name="id_categoria">
			<option value="<?php echo $row['id_categoria'];?>"> <?php echo $row['id_categoria'];?> </option> 
			<?php
			   $query= 'SELECT * FROM categoria ORDER BY categoria;';
		       $resu = mysqli_query($con,$query) or die(mysqli_connect_error());
		       while ($reg = mysqli_fetch_array($resu)){
				  				   
            ?>
            <option value="<?php echo $reg['id'];?>"> <?php echo $reg['categoria'];?> </option> 
		    <?php
		      }
		    ?>  
		    </select>
				
							
			<p><input type="submit" value="Salvar">
		</form>
	</body>
</html>