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
        <title> Todos os Prestadores </title>
    </head>
    <body>
        <h1> Todos os Prestadores </h1>
        <form method="POST" action="">
            <label> Buscar Serviço: </label>
            <input type="text" name="serv" placeholder="Buscar serviço" size="30">
            <br><br>
            <input type="submit" name="sendPesqTprest" value="Buscar">
        </form>

        <?php
            $sendPesqTprest = filter_input(INPUT_POST, 'sendPesqTprest', FILTER_SANITIZE_STRING);
            if($sendPesqTprest) {
                $serv = filter_input(INPUT_POST, 'serv', FILTER_SANITIZE_STRING);
                $query = "SELECT prestadores_servicos.id_prestador, prestadores_servicos.id_servico, 
                prestadores.nome_prest, servicos.servico FROM prestadores_servicos JOIN 
                prestadores ON prestadores_servicos.id_prestador = prestadores.id JOIN servicos ON 
                prestadores_servicos.id_servico = servicos.id WHERE servicos.servico LIKE '%$serv%'";
                $result = mysqli_query($con, $query);
                echo "<h1> Prestadores </h1><hr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Prestador(a): " . $row['nome_prest'] . "<br>";
                    echo "Serviço: " . $row['servico'] . "<br><hr>";
                }
            }
        ?>
    </body>
</html>