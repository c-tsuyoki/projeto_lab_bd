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
        <title> Serviços Disponíveis </title>
    </head>
    <body>
        <h1> Serviços </h1>
        <form method="POST" action="">
            <label> Buscar Serviço: </label>
            <input type="text" name="serv" placeholder="Buscar serviços" size="30">
            <br><br>
            <input type="submit" name="sendPesqCat" value="Buscar"><br><br>
            <input type="submit" name="tudo" value="Todos os Serviços">
        </form>

        <?php
            $sendPesqCat = filter_input(INPUT_POST, 'sendPesqCat', FILTER_SANITIZE_STRING);
            $tudo = filter_input(INPUT_POST, 'tudo', FILTER_SANITIZE_STRING);
            if($sendPesqCat) {
                $serv = filter_input(INPUT_POST, 'serv', FILTER_SANITIZE_STRING);
                $query = "SELECT servico FROM servicos WHERE servico LIKE '%$serv%'";
                echo "<h1> Resultado da Busca </h1>";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row['servico'] . "<br><hr>";
                }
            }
            if($tudo) {
                echo "<h1> Todos os Serviços </h1>";
                $query = "SELECT servico FROM servicos";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row['servico'] . "<br><hr>";
                }
            }
        ?>
    </body>
</html>