<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {
	    session_start();
    }
    include("conexao.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Orçamentos por Cliente </title>
    </head>
    <body>
        <h1> Orçamentos por Cliente </h1>
        <form method="POST" action="">
            <label> Nome do Cliente: </label>
            <input type="text" name="cliente" placeholder="Nome do Cliente" size="30">
            <br><br>
            <input type="submit" name="sendPesqCli" value="Buscar"><hr>
        </form>

        <?php
            $sendPesqCli = filter_input(INPUT_POST, 'sendPesqCli', FILTER_SANITIZE_STRING);
            if($sendPesqCli) {
                $cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
                $query = "SELECT orcamentos.data, orcamentos.valor, orcamentos.data_expiracao, 
                orcamentos.observacao, prestadores.nome_prest, clientes.nome_cli, servicos.servico FROM 
                orcamentos JOIN prestadores ON orcamentos.id_prestador = prestadores.id JOIN clientes
                ON orcamentos.id_cliente = clientes.id JOIN servicos ON orcamentos.id_servico = servicos.id
                WHERE clientes.nome_cli LIKE '%$cliente%'";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Data: " . $row['data'] . "<br>";
                    echo "Valor: " . $row['valor'] . "<br>";
                    echo "Prestador: " . $row['nome_prest'] . "<br>";
                    echo "Data de Expiração: " . $row['data_expiracao'] . "<br>";
                    echo "Cliente: " . $row['nome_cli'] . "<br>";
                    echo "Serviço: " . $row['servico'] . "<br>";
                    echo "Observação: " . $row['observacao'] . "<br><hr>";
                }
            }
        ?>
    </body>
</html>