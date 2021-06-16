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
    <title>Relex</title>
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
            <h1>Busca</h1>
            <ul class="ok_on2 viw">
                <li><a href="consult_orcam_cli.php"><button class="btn_ ok_ vie"> orçamento cli</button></a></li>
                <li><a href="consult_orcam_prest.php"><button class="btn_ ok_ vie">orcamento prest</button></a></li>
                <li><a href="consult_todos_prest.php"><button class="btn_ ok_ vie">Todos prestadores</button></a></li>
                <li><a href="consult_todos_servicos.php"><button class="btn_ ok_ vie">Todos serviços</button></a></li>

                <li><a href="consult_orcam_data.php"><button class="btn_ ok_ vie">Orçamento Data</button></a></li>
                
                <li><a href="consult_servicos_cat.php"><button class="btn_ ok_ vie">Serviços cat</button></a></li>
                <li><a href="consult_prestadores.php"><button class="btn_ ok_ vie">Prestadores</button></a></li>
                



            </ul>

        </div>

        </div>
    </section>
</body>

</html>