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
                                <h1 class='service'>Orçamento por periodo</h1>
                                <span class="details"></span>
                                <input style="margin-bottom:12px;" type="text" name="data_init" placeholder="Data Inicial" size="60"><br>
                                <input type="text" name="data_fim" placeholder="Data de Expiração" size="60">
                            </div>

                            <div class="button">
                                <a><input name="sendPesqData" type="submit" value="Buscar"></a>
                            </div>
                            <br>

                        </div>

                    </form>
                    <?php
                    $sendPesqData = filter_input(INPUT_POST, 'sendPesqData', FILTER_SANITIZE_STRING);
                    if ($sendPesqData) {
                        $data_init = filter_input(INPUT_POST, 'data_init', FILTER_SANITIZE_STRING);
                        $data_fim = filter_input(INPUT_POST, 'data_fim', FILTER_SANITIZE_STRING);
                        $query = "SELECT orcamentos.data, orcamentos.valor, orcamentos.data_expiracao, 
                orcamentos.observacao, prestadores.nome, clientes.nome, servicos.servico FROM 
                orcamentos JOIN prestadores ON orcamentos.id_prestador = prestadores.id JOIN clientes
                ON orcamentos.id_cliente = clientes.id JOIN servicos ON orcamentos.id_servico = servicos.id
                WHERE data LIKE '%$data_init%' AND data_expiracao LIKE '%$data_fim%'";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "Data: " . $row['data'] . "<br>";
                            echo "Data de Expiração: " . $row['data_expiracao'] . "<br>";
                            echo "Cliente: " . $row['nome'] . "<br>";
                            echo "Prestador: " . $row['nome'] . "<br>";
                            echo "Serviço: " . $row['servico'] . "<br>";
                            echo "Valor: " . $row['valor'] . "<br>";
                            echo "Observação: " . $row['observacao'] . "<br><hr>";
                        }
                    }
                    ?>

                </div>

            </div>


        </section>

    </body>

    </html>