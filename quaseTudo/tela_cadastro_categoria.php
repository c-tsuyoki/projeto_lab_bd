<?php
    if (session_status() !== PHP_SESSION_ACTIVE){
		session_start();
	}	
?>		
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title> Cadastro de Categorria </title>
	</head>
	<a href="lista_categoria.php">Listar</a><br>
	<body>
	    <?php
			if (isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
		    }
		?>
		<p><h1> Categoria</h1></p>
        <form method="POST" action="inclusao_categoria.php">
		<p> Categoria: <input type="text" size="80" name="categoria" required>
		<p> <input type="submit" value="Enviar">
		<p> <input type="reset" value="Limpar">
		</form>
	</body>
</html>