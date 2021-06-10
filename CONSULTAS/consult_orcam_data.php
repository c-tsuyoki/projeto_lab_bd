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
        <title> Orçamentos por Período </title>
    </head>
    <body>
        <h1> Orçamentos por Período </h1>
        <form method="POST" action="">
            <label> Data Inicial: </label>
            <input type="text" name="data_init" placeholder="Data Inicial" size="15"><br><br>
            <label> Data de Expiração: </label>
            <input type="text" name="data_fim" placeholder="Data de Expiração" size="15">
            <br><br>
            <input type="submit" name="sendPesqData" value="Buscar"><hr>
        </form>

        <?php
            $sendPesqData = filter_input(INPUT_POST, 'sendPesqData', FILTER_SANITIZE_STRING);
            if($sendPesqData) {
                $data_init = filter_input(INPUT_POST, 'data_init', FILTER_SANITIZE_STRING);
                $data_fim = filter_input(INPUT_POST, 'data_fim', FILTER_SANITIZE_STRING);
                $query = "SELECT orcamentos.data, orcamentos.valor, orcamentos.data_expiracao, 
                orcamentos.observacao, prestadores.nome_prest, clientes.nome_cli, servicos.servico FROM 
                orcamentos JOIN prestadores ON orcamentos.id_prestador = prestadores.id JOIN clientes
                ON orcamentos.id_cliente = clientes.id JOIN servicos ON orcamentos.id_servico = servicos.id
                WHERE data LIKE '%$data_init%' AND data_expiracao LIKE '%$data_fim%'";
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