<?php
    if (session_status() !== PHP_SESSION_ACTIVE){
		session_start();
	}	
?>		

<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title> Cadastro de Orçamentos </title>
	</head>
	<body>
    <a href="lista_orcamentos.php">Listar</a>
	    <?php
			if (isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
		    }
		?>
		<p><h1> Orçamentos - inclusão</h1></p>
		<form method="POST" action="inclusao_orcamentos.php">
		<p> Data: <input type="date" name="data" required>
        <p> Data de Expiração: <input type="date" name="data_expiracao" required>
        <p> Valor: <input type="text" size="10" name="valor" required>
        
        <div>
            <label> Prestador: </label>
            <select required name="id_prestador">
                <option selected disabled>Selecione um prestador</option>
                <?php
                    include("conexao.php");
                    $query = 'SELECT * FROM prestadores ORDER BY id';
                    $result = mysqli_query($con, $query) or die(mysqli_connect_error());
                    while ($cat = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $cat['id'] ?>"><?php echo $cat['nome_prest'] ?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <br>
        
        <div>
            <label> Cliente: </label>
            <select required name="id_cliente">
                <option selected disabled>Selecione um cliente</option>
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
        <br>

        <div>
            <label> Serviço: </label>
            <select required name="id_servico">
                <option selected disabled>Selecione o Serviço</option>
                <?php
                    include("conexao.php");
                    $query = 'SELECT * FROM servicos ORDER BY id';
                    $result = mysqli_query($con, $query) or die(mysqli_connect_error());
                    while ($cat = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $cat['id'] ?>"><?php echo $cat['servico'] ?></option>
                <?php
                    }
                ?>
            </select>
        </div>

        <p> Observação: <input type="text" size="50" name="observacao" required>
		<p><input type="submit" value="Enviar">   <input type="reset" value="Limpar"> 
		</form>
	</body>
</html>