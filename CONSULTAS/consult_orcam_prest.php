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
        <title> Orçamentos por Prestadores </title>
    </head>
    <body>
        <h1> Orçamentos por Prestadores </h1>
        <form method="POST" action="">
            <label> Nome do Prestador: </label>
            <input type="text" name="prest" placeholder="Nome do Prestador" size="30">
            <br><br>
            <input type="submit" name="sendPesqPrest" value="Buscar"><hr>
        </form>

        <?php
            $sendPesqPrest = filter_input(INPUT_POST, 'sendPesqPrest', FILTER_SANITIZE_STRING);
            if($sendPesqPrest) {
                $prest = filter_input(INPUT_POST, 'prest', FILTER_SANITIZE_STRING);
                $query = "SELECT orcamentos.data, orcamentos.valor, orcamentos.data_expiracao, 
                orcamentos.observacao, prestadores.nome_prest, clientes.nome_cli, servicos.servico FROM 
                orcamentos JOIN prestadores ON orcamentos.id_prestador = prestadores.id JOIN clientes
                ON orcamentos.id_cliente = clientes.id JOIN servicos ON orcamentos.id_servico = servicos.id
                WHERE prestadores.nome_prest LIKE '%$prest%'";
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