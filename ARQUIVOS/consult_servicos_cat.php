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
                <li><a href="cadastro_cliente.php"><button class="btn">Sair</button></a></li>

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
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="user-details">
                        <div class="input-box">
                            <h1 class='service'>Relatório De serviços</h1>
                            <span class="details"></span>
                            <input type="text" name="categoria" placeholder="Buscar categoria" size="150px">
                        </div>

                        <div class="button">
                            <a><input name="sendPesqCat" type="submit" value="Buscar"></a>
                        </div>
                        <br>

                    </div>
                    <?php
                    $sendPesqCat = filter_input(INPUT_POST, 'sendPesqCat', FILTER_SANITIZE_STRING);
                    if ($sendPesqCat) {
                        $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
                        $query = "SELECT servicos.servico, categoria.categoria FROM servicos JOIN categoria ON servicos.id_categoria = categoria.id WHERE categoria.categoria LIKE '%$categoria%'";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='server'>" . "Serviço: " . $row['servico'] . "</div>";
                            echo "<div style='color:green;'>"."Categoria: " . $row['categoria'] . "</div>";
                        }
                    }
                    ?>
                </form>


            </div>

        </div>


    </section>

</body>

</html>