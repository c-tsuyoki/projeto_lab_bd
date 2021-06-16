<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style_login.php">
  <link rel="stylesheet" href="style.php">
</head>

<body>
  <section class="sec">
    <header>
      <a href="index.php"><img src="./images/Relex.png" class="logo"></a>

      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="lista_cliente.php">Listas</a></li>
        <li><a href="cadastro_cliente.php"><button class="btn">Cadastrar</button></a></li>

      </ul>
    </header>
    <div class="login-box boxir ymir">
      <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
      <h1>Escolha </h1>

      <div class="sucess eren">
        
        <br>
        <br>
        <a href="adm.php"><button class="btn cri">ADM</button></a>
        <a href="cliente.php"><button class="btn">Cliente</button></a>
        <a href="prestador.php"><button class="btn">Prestador</button></a>
      </div>
      




  </section>
</body>

</html>