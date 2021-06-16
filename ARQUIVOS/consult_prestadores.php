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
                                <h1 class='service'>Buscar prestadores</h1>
                                <span class="details"></span>
                                <input type="text" name="serv" placeholder="Buscar serviço" size="60"><br>

                            </div>

                            <div class="button">
                                <a><input type="submit" name="sendPesqPrest" value="Buscar"></a>
                            </div>
                            <br>

                        </div>

                    </form>
                    <?php
                    $sendPesqPrest = filter_input(INPUT_POST, 'sendPesqPrest', FILTER_SANITIZE_STRING);
                    if ($sendPesqPrest) {
                        $serv = filter_input(INPUT_POST, 'serv', FILTER_SANITIZE_STRING);
                        $query = "SELECT prestadores_servicos.id_prestador, prestadores_servicos.id_servico, 
                prestadores.nome, servicos.servico FROM prestadores_servicos JOIN 
                prestadores ON prestadores_servicos.id_prestador = prestadores.id JOIN servicos ON 
                prestadores_servicos.id_servico = servicos.id WHERE servicos.servico LIKE '%$serv%'";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "Serviço: " . $row['servico'] . "<br>";
                            echo "Prestador(a): " . $row['nome'] . "<br><hr>";
                        }
                    }
                    ?>

                </div>

            </div>


        </section>

    </body>

    </html>