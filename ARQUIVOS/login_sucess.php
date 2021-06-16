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
    <div class="login-box boxir">
      <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
      <h1>Sucesso </h1>

      <div class="sucess">
        <p>Cadastrado com sucesso, campeão</p>
        <img src="./images/comer.png" class="sucess_logo">
        <br><br>
        <a href="cadastro_cliente.php"><button class="btn cri">Voltar</button></a>
        <a href="router.php"><button class="btn">Acessar</button></a>
      </div>
      




  </section>
</body>

</html>