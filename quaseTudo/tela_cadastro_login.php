<?php
    if (session_status() !== PHP_SESSION_ACTIVE){
		session_start();
	}	
?>		
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title> Cadastro de Login </title>
	</head>
	<body>
    <a href="lista_login.php">Listar</a>
	    <?php
			if (isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
		    }
		?>
		<p><h1> Login - inclusão</h1></p>
		<form method="POST" action="inclusao_login.php">
		<p> Login: <input type="text" size="80" name="login" required>
        <p> Senha: <input type="password" size="80" name="senha_login" required>
        <p> Tipo: <input type="text" size="80" name="tipo" required>
		
		<div>
            <label> Cliente: </label>
            <select required name="id_cliente">
                <option selected disabled>Selecione o Cliente</option>
                <?php
                    include("conexao.php");
                    $query = 'SELECT * FROM clientes ORDER BY id';
                    $result = mysqli_query($con, $query) or die(mysqli_connect_error());
                    while ($cat = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $cat['id'] ?>"><?php echo $cat['nome_cli'] ?></option>
                <?php
                    }
                ?>
            </select>
        </div>

		<p> <input type="submit" value="Enviar">
		<p> <input type="reset" value="Limpar">
		</form>
	</body>
</html>