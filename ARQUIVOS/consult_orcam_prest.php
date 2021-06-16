<!-6d - relatório de todos os orçamentos de um determinado cliente->

    <?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    include("conexao.php");
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Buscar</title>
        <link rel="stylesheet" href="style.php">
        <link rel="stylesheet" href="style_lista.php">

    </head>

    <body>

        <section class="sec">
            <header>
                <a href="#"><img src="./images/Relex.png" class="logo"></a>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="lista_cliente.php">listar</a></li>
                    <li><a href="busca.php"><button class="btn">Sair</button></a></li>

                </ul>
            </header>

            <div class="container pk">
                <div class="content law">

                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>

                    <form method="POST" action="">
                        <div class="user-details">
                            <div class="input-box">
                                <h1 class='service'>Nome do prestador</h1>
                                <span class="details"></span>
                                <input type="text" name="prest" placeholder="Nome do Prestador" size="60">
                            </div>

                            <div class="button">
                                <a><input name="sendPesqPrest" type="submit" value="Buscar"></a>
                            </div>
                            <br>

                        </div>

                    </form>
                    <?php
                    $sendPesqPrest = filter_input(INPUT_POST, 'sendPesqPrest', FILTER_SANITIZE_STRING);
                    if ($sendPesqPrest) {
                        $prest = filter_input(INPUT_POST, 'prest', FILTER_SANITIZE_STRING);
                        $query = "SELECT orcamentos.data, orcamentos.valor, orcamentos.data_expiracao, 
                        orcamentos.observacao, prestadores.nome, clientes.nome, servicos.servico FROM 
                        orcamentos JOIN prestadores ON orcamentos.id_prestador = prestadores.id JOIN clientes
                        ON orcamentos.id_cliente = clientes.id JOIN servicos ON orcamentos.id_servico = servicos.id
                        WHERE prestadores.nome LIKE '%$prest%'";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='server'>"."Prestador: " . $row['nome'] . "<br>";
                            echo "Data: " . $row['data'] . "<br>";
                            echo "Data de Expiração: " . $row['data_expiracao'] . "<br>";
                            echo "Cliente: " . $row['nome'] . "<br>";
                            echo "Serviço: " . $row['servico'] . "<br>";
                            echo "Valor: " . $row['valor'] . "<br>";
                            echo "Observação: " . $row['observacao'] . "<br>"."</div>";
                        }
                    }
                    ?>

                </div>

            </div>


        </section>

    </body>

    </html>