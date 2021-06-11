<!-6a - relatório de todos os serviços, com opção de filtro por uma determinada categoria.->

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
        <title> Relatório de Serviços </title>
    </head>
    <body>
        <h1> Relatório de Serviços </h1>
        <form method="POST" action="">
            <label> Buscar Categoria: </label>
            <input type="text" name="categoria" placeholder="Buscar categoria de serviço" size="30">
            <br><br>
            <input type="submit" name="sendPesqCat" value="Buscar"><hr>
        </form>

        <?php
            $sendPesqCat = filter_input(INPUT_POST, 'sendPesqCat', FILTER_SANITIZE_STRING);
            if($sendPesqCat) {
                $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
                $query = "SELECT servicos.servico, categoria.categoria FROM servicos JOIN categoria ON servicos.id_categoria = categoria.id WHERE categoria.categoria LIKE '%$categoria%'";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Serviço: " . $row['servico'] . "<br>";
                    echo "Categoria: " . $row['categoria'] . "<br><hr>";
                }
            }
        ?>
    </body>
</html>