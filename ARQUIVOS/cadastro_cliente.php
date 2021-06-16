<!DOCTYPE html>

<html lang="pt-br" dir="ltr">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="style.php">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <section class="sec">
    <header>
      <a href="#"><img src="./images/Relex.png" class="logo"></a>

      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="lista_cliente.php">Listar</a></li>
        <li><a href="login_cliente.php">Entrar</a></li>
        <li><a href="cadastro_cliente.php"><button class="btn">Cadastrar</button></a></li>

      </ul>
    </header>

    <div class="container">
    <a class="link" href="login_cliente.php"><p class="login">Login</p><a/>
      <div class="title">
        <a href="cadastro_cliente.php"><button class="btn_cli btn_ex" type="submit">Cliente</button></a>
        <a href="cadastro_prestador.php"><button class="btn_pres btn_ex">Prestador</button></a>
        
      </div>
      <div class="content">
        <form method="POST" action="inclusao_cliente.php">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Nome</span>
              <input placeholder="Informe seu nome" type="text" name="nome" required>
            </div>
            <div class="input-box">
              <span class="details">Endereço</span>
              <input placeholder="Informe seu endereço" type="text" size="20" name="endereco" required>
            </div>
            <div class="input-box">
              <span class="details">Complemento</span>
              <input placeholder="Informe seu complemento" type="text" size="100" name="complemento" required>
            </div>
            <div class="input-box">
              <span class="details">Bairro</span>
              <input placeholder="Informe seu bairro" type="text" size="80" name="bairro" required>
            </div>
            <div class="input-box">
              <span class="details">Cidade</span>
              <input placeholder="Informe sua cidade" type="text" size="20" name="cidade" required>
            </div>
            <div class="input-box">
              <span class="details">Estado</span>
              <input placeholder="Informe seu estado" type="text" size="80" name="estado" required>
            </div>
            <div class="input-box">
              <span class="details">CPF/CNPJ:</span>
              <input placeholder="Informe seu documento" type="text" size="80" name="cpf_cnpj" required>
            </div>
            <div class="input-box">
              <span class="details">RG</span>
              <input placeholder="Informe seu documento" type="text" size="20" name="rg" required>
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input placeholder="Informe seu email" type="email" size="80" name="email" required>
            </div>
            <div class="input-box">
              <span class="details">Telefone</span>
              <input placeholder="Informe seu telefone" type="text" size="80" name="telefone" required>
            </div>
            <div class="input-box">
              <span class="details">Celular</span>
              <input placeholder="Informe seu celular" type="text" size="20" name="celular" required>
            </div>
            <div class="input-box">
              <span class="details">CEP</span>
              <input placeholder="Informe seu CEP" type="text" size="80" name="cep" required>
            </div>
          </div>

          
            <div class="button">
              <a href="index.php"><input type="submit" value="Registrar"></a>
            </div>

            

            
        </form>
      </div>
    </div>


  </section>
</body>

</html>