<?php
    if (session_status() !== PHP_SESSION_ACTIVE){
		session_start();
	}	
?>		
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title> Cadastro de Serviços </title>
	</head>
	<body>
    <a href="lista_servicos.php">Listar</a>
	    <?php
			if (isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
		    }
		?>
		<p><h1> Serviços - inclusão</h1></p>
		<form method="POST" action="inclusao_servicos.php">
		<p> Serviço: <input type="text" size="80" name="servico" required>
		<label> Categoria: </label>
		<select name="id_categoria"> 
		<?php
		  include("conexao.php");
		  $query= 'SELECT * FROM categoria ORDER BY categoria;';
		  $resu = mysqli_query($con,$query) or die(mysqli_connect_error());
		  while ($reg = mysqli_fetch_array($resu)){
        ?>
        <option value="<?php echo $reg['id'];?>"> <?php echo $reg['categoria'];?> </option> 
		<?php
		   
		  }
		?>  
		</select>
		<p> <input type="submit" value="Enviar">
		<p> <input type="reset" value="Limpar">
		</form>
	</body>
</html>