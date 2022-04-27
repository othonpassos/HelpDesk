<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

  if(strlen($_POST['email']) == 0){
    echo "Preencha seu e-mail";
  } else if(strlen($_POST['senha']) == 0) {
      echo "Preencha sua senha";
  } else {

      $email = $mysqli -> real_escape_string($_POST['email']);
      $senha = $mysqli -> real_escape_string($_POST['senha']);

      $sql_code = "SELECT email,senha FROM usuarios where email = '$email' and senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    
      $quantidade = $sql_query->num_rows;
      if($quantidade == 1){

          $usuario = $sql_query->fetch_assoc();
          
          if(!isset($_SESSION)){
            session_start();
          }

          $_SESSION['user'] = $usuario['id'];

          header("Location: painel.php");
        } else{
        echo "Falha ao logar! E-mail ou senha incorretos";
      }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <title>Suporte</title>
</head>

<body>

  <header>
    <div class="caixa">
      <img src="logo.png" id="logo">

      <nav>
        <h1 class="titulo-principal">REUP - Suporte</h1>
      </nav>
    </div>

  </header>

  <main>
    <div class="card-login">
      <div class="card">
        <div class="card-header">
          Login:
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class="form-group">
              <input name="email" type="email" class="input-padrao" required placeholder="E-mail">
            </div>
            <div class="form-group">
              <input name="senha" type="password" class="input-padrao" required placeholder="Senha">
            </div>
            <button class="entrar" type="submit">Entrar</button>
          </form>
          <a href="" class="link">Ainda não é inscrito?Cadastra-se aqui!</a>
        </div>
      </div>
    </div>
    </div>
  </main>

</body>

</html>