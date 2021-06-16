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
                                <h1 class='service'>Buscar serviço</h1>
                                <span class="details"></span>
                                <input type="text" name="prest" placeholder="buscar serviço" size="60">
                            </div>

                            <div class="button">
                                <a><input name="sendPesqTprest" type="submit" value="Buscar"></a>
                            </div>
                            <br>

                        </div>

                    </form>
                    <?php
                    $sendPesqTprest = filter_input(INPUT_POST, 'sendPesqTprest', FILTER_SANITIZE_STRING);
                    if ($sendPesqTprest) {
                        $serv = filter_input(INPUT_POST, 'serv', FILTER_SANITIZE_STRING);
                        $query = "SELECT prestadores_servicos.id_prestador, prestadores_servicos.id_servico, 
                prestadores.nome, servicos.servico FROM prestadores_servicos JOIN 
                prestadores ON prestadores_servicos.id_prestador = prestadores.id JOIN servicos ON 
                prestadores_servicos.id_servico = servicos.id WHERE servicos.servico LIKE '%$serv%'";
                        $result = mysqli_query($con, $query);
                        echo "<h1 style='color:white;'> Prestadores </h1>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div>" . "Prestador(a): " . $row['nome'] . "<br>";
                            echo "Serviço: " . $row['servico'] . "<br></div>";
                        }
                    }
                    ?>

                </div>

            </div>


        </section>

    </body>

    </html>