<?php
    if (session_status() !== PHP_SESSION_ACTIVE){
		session_start();
	}	
?>		
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title> Cadastro de Prestadores </title>
	</head>
	<a href="lista_prestadores.php">Listar</a><br>
	<body>
	    <?php
			if (isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
		    }
		?>
		<p><h1> Prestador</h1></p>
		<form method="POST" action="inclusao_prestadores.php">
		<p> Nome: <input type="text" size="80" name="nome" required>
		<p> Endereço: <input type="text" size="20" name="endereco" required>
		<p> Complemento: <input type="text" size="100" name="complemento" required>
		<p> Bairro: <input type="text" size="80" name="bairro" required>
		<p> Cidade: <input type="text" size="20" name="cidade" required>
		<p> Estado: <input type="text" size="80" name="estado" required>
        <p> CEP: <input type="text" size="80" name="cep" required>
		<p> Email: <input type="email" size="80" name="email" required>
		<p> Telefone: <input type="text" size="80" name="telefone" required>
		<p> Celular: <input type="text" size="20" name="celular" required>
		<p> <input type="submit" value="Enviar">
		<p> <input type="reset" value="Limpar">
		</form>
	</body>
</html>