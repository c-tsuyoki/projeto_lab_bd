<!-6b - relatório de todos os prestadores para cada serviço->

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
        <title> Prestadores por serviço </title>
    </head>
    <body>
        <h1> Prestadores por serviço </h1>
        <form method="POST" action="">
            <label> Buscar Serviço: </label>
            <input type="text" name="serv" placeholder="Buscar serviço" size="30">
            <br><br>
            <input type="submit" name="sendPesqPrest" value="Buscar"><hr>
        </form>

        <?php
            $sendPesqPrest = filter_input(INPUT_POST, 'sendPesqPrest', FILTER_SANITIZE_STRING);
            if($sendPesqPrest) {
                $serv = filter_input(INPUT_POST, 'serv', FILTER_SANITIZE_STRING);
                $query = "SELECT prestadores_servicos.id_prestador, prestadores_servicos.id_servico, 
                prestadores.nome_prest, servicos.servico FROM prestadores_servicos JOIN 
                prestadores ON prestadores_servicos.id_prestador = prestadores.id JOIN servicos ON 
                prestadores_servicos.id_servico = servicos.id WHERE servicos.servico LIKE '%$serv%'";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Serviço: " . $row['servico'] . "<br>";
                    echo "Prestador(a): " . $row['nome_prest'] . "<br><hr>";
                }
            }
        ?>
    </body>
</html>