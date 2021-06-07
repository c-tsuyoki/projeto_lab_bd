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
	</head>
	<body>
		<a href="tela_cadastro_orcamentos.php">Cadastrar</a><br>
		<a href="lista_orcamentos.php">Listar</a><br>
		<h1>Alteração - Orçamentos</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_orcamentos.php">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			
			<label>Data: </label>
			<input type="date" name="data" value="<?php echo $row['data']; ?>"><br><br>
            <label>Valor: </label>
			<input type="text" name="valor" size="90" value="<?php echo $row['valor']; ?>"><br><br>
            <label>Prestador: </label>
			<select name="id_prestador">
			<option value="<?php echo $row['id_prestador'];?>"> <?php echo $row['id_prestador'];?> </option> 
			<?php
			   $query= 'SELECT * FROM prestadores ORDER BY nome;';
		       $resu = mysqli_query($con,$query) or die(mysqli_connect_error());
		       while ($reg = mysqli_fetch_array($resu)){
				  				   
            ?>
            <option value="<?php echo $reg['id'];?>"> <?php echo $reg['nome'];?> </option> 
		    <?php
		      }
		    ?>  
		    </select>
            <label>Data Expiração: </label>
			<input type="date" name="data_expiracao" value="<?php echo $row['data_expiracao']; ?>"><br><br>
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
			<label>Serviço: </label>
			<select name="id_servico">
			<option value="<?php echo $row['id_servico'];?>"> <?php echo $row['id_servico'];?> </option> 
			<?php
			   $query= 'SELECT * FROM servicos ORDER BY servico;';
		       $resu = mysqli_query($con,$query) or die(mysqli_connect_error());
		       while ($reg = mysqli_fetch_array($resu)){
				  				   
            ?>
            <option value="<?php echo $reg['id'];?>"> <?php echo $reg['servico'];?> </option> 
		    <?php
		      }
		    ?>  
		    </select>
			<label>Observação: </label>
			<input type="text" name="observacao" size="90" value="<?php echo $row['observacao']; ?>"><br><br>	

			<p><input type="submit" value="Salvar">
		</form>
	</body>
</html>