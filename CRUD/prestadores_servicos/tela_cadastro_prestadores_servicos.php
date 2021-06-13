<?php
    if (session_status() !== PHP_SESSION_ACTIVE){
		session_start();
	}	
?>		
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title> Cadastro de Prestadores e Serviços </title>
	</head>
	<body>
    <a href="lista_prestadores_servicos.php">Listar</a>
	    <?php
			if (isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
		    }
		?>
		<p><h1> Prestadores e Serviços - inclusão</h1></p>
		<form method="POST" action="inclusao_prestadores_servicos.php">
        <label> Prestador: </label>
		<select name="id_prestador"> 
		<?php
		  include("conexao.php");
		  $query= 'SELECT * FROM prestadores ORDER BY nome;';
		  $resu = mysqli_query($con,$query) or die(mysqli_connect_error());
		  while ($reg = mysqli_fetch_array($resu)){
        ?>
        <option value="<?php echo $reg['id'];?>"> <?php echo $reg['nome'];?> </option> 
		<?php
		   
		  }
		?>  
		</select>
        <label> Serviço: </label>
		<select name="id_servico"> 
		<?php
		  include("conexao.php");
		  $query= 'SELECT * FROM servicos ORDER BY servico;';
		  $resu = mysqli_query($con,$query) or die(mysqli_connect_error());
		  while ($reg = mysqli_fetch_array($resu)){
        ?>
        <option value="<?php echo $reg['id'];?>"> <?php echo $reg['servico'];?> </option> 
		<?php
		   
		  }
		?>  
		</select>
		<p> <input type="submit" value="Enviar">
		<p> <input type="reset" value="Limpar">
		</form>
	</body>
</html>