<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style_lista.php">
    <link rel="stylesheet" href="style.php">
    <title>CRUD - Listar</title>
</head>

<body>

    <section class="sec">
        <header>
            <a href="index.php"><img src="./images/Relex.png" class="logo"></a>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="lista_cliente.php">Listar</a></li>
                <li><a href="tela_cadastro_servicos.php">Serviços</a></li>
                <li><a href="tela_cadastro_orcamentos.php">Orçamentos</a></li>
                <li><a href="cadastro_cliente.php"><button class="btn">Sair</button></a></li>

            </ul>
        </header>

        <div class="login-boxer">
            <h1>Cliente</h1>
            <ul class="ok_on2">
                <li><a href="tela_cadastro_orcamentos.php"><button class="btn_ ok_"> orçamento</button></a></li>
                <li><a href="tela_cadastro_servicos.php"><button class="btn_ ok_"> Serviço</button></a></li>
                <li><a href="busca.php"><button class="btn_ ok_">Buscar</button></a></li>
                <li><a href="login_cliente.php"><button class="btn_ ok_">login</button></a></li>
                <li><a href="tela_cadastro_categoria.php"><button class="btn_ ok_">Categoria</button></a></li>



            </ul>

        </div>

        </div>
    </section>
</body>

</html>