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

            <div class="container pk pt">
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
                                <h1 class='service'>buscar todos serviços</h1>
                                <span class="details"></span>
                                <input type="text" name="serv" placeholder="Buscar serviços" size="60px">
                            </div>






                        </div>
                        <div class="button">
                            <a><input name="sendPesqServ" type="submit" value="Buscar"></a>
                        </div>
                        <div class="button">
                            <a><input type="submit" name="tudo" value="Todos os Serviços"></a>
                        </div>

                    </form>
                    <?php
                    $sendPesqServ = filter_input(INPUT_POST, 'sendPesqServ', FILTER_SANITIZE_STRING);
                    $tudo = filter_input(INPUT_POST, 'tudo', FILTER_SANITIZE_STRING);
                    if ($sendPesqServ) {
                        $serv = filter_input(INPUT_POST, 'serv', FILTER_SANITIZE_STRING);
                        $query = "SELECT servico FROM servicos WHERE servico LIKE '%$serv%'";
                        echo "<h1 style='color:white;font-size:15px;margin-right:30px;'> Resultado da Busca </h1>";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['servico'];
                        }
                    }
                    if ($tudo) {

                        $query = "SELECT servico FROM servicos";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='server'>" . $row['servico'] . "</div>";
                        }
                    }
                    ?>
                </div>

            </div>


        </section>

    </body>

    </html>