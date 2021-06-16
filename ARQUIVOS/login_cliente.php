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
        <li><a href="login_cliente.php">Entrar</a></li>
        <li><a href="lista_cliente.php">Listar</a></li>
        <li><a href="cadastro_cliente.php"><button class="btn">Cadastrar</button></a></li>

      </ul>
    </header>
    <div class="login-box">
      <?php
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
      <h1>Login</h1>
      <form method="POST" action="inclusao_login.php">
        <div class="textbox">
          <p> Login: <input type="text" size="80" name="login" required>
        </div>
        <div class="textbox">
          <p> Senha: <input type="password" size="80" name="senha_login" required>
        </div>
        <div class="textbox">
          <p> Tipo: <input type="text" size="80" name="tipo" required placeholder="ADM OU CLI">
        </div>
        <div class="textbox">
          <label> Cliente: </label>
          <select name="id_cliente">
          <?php
		        include("conexao.php");
		        $query= 'SELECT * FROM clientes ORDER BY nome;';
		        $resu = mysqli_query($con,$query) or die(mysqli_connect_error());
		        while ($reg = mysqli_fetch_array($resu)){
          ?>
          
		      <option value="<?php echo $reg['id'];?>"> <?php echo $reg['nome'];?> </option> 
          <?php
		   
		        }
		      ?>
          </select>
          <br>
          
        </div>
        <br>
        <p> <input type="submit" value="Cadastrar login" class="btn_on"></p>
        <br>
        
      </form>


      <!--<div class="textbox">
      <i class="fas fa-user"></i>
      <input type="text" placeholder="Usuario">
    </div>
    <br>

    <div class="textbox">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Senha">
    </div>
    <br>
    <input type="button" class="btn_on" value="Login">
  </div>!-->


  </section>
</body>

</html>