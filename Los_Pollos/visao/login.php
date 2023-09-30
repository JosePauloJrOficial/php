<!doctype html>
<html lang="pt-br">

 <?php 
 session_start();
 ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" href="../img/icone-los-pollos.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Los Pollos Hermanos - Login</title>
  <style>
    .form-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .logo-admin{
      margin-top: 8px;
    }
   
  .container-admin-banner2 {
    text-align: center;
    margin-top: 8px; /* Defina a margem superior corretamente */
    color:white;
  }
</style>
  </style>
</head>

<body>
  <main>
    <section class="container-admin-banner">
      <img src="../img/logo-los-pollos-horizontal.png" class="logo-admin" alt="logo-los-pollos">
      <h1>Los Pollos Hermanos</h1>
      <h2>Login</h2> <br>

      <img class="ornaments" src="../img/ornaments-coffee.png" alt="ornaments">
    </section>
    <!--<section class="container-form">-->
    <div class="form-container">
      <form method="post" action="../controladora/processar-login.php">

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" required>

        <input type="submit" class="botao-cadastrar" name="entrar" value="Entrar" />
        <?php if (isset($_GET["erro"])){ ?>
          <label for="senha">Usuário ou senha inválidos</label>
        <?php }?>
      </form>
    </div>
    <div class="form-container">
      <form action="cadastrar-usuario.php" method="post">
        <input type="submit" name="cadastro" class="botao-cadastrar" value="Usuário novo" />

      </form>
    </div>


    
  </main>
</body>

</html>