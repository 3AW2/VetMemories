<?php
  session_start();
  include "../Perfil.php";

  $nome_err = " ";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $turma = $_POST["turma"];
    $escola = $_POST["escola"];
    $email = $_POST["email"];
    $senha = $_POST["password"];

    
    $erro = 0;

    if (empty(trim($nome)) or empty(trim($email)) or empty(trim($turma)) or empty(trim($escola)) or empty(trim($email)) or empty(trim($senha))){
      
      $nome_err = "Preencha todos os campos!";
      $erro = 1;
    }

    if(preg_match('/\d/', $nome)){
      $nome_err = "O campo nome deve conter apenas letras! <br/><br/>";
      $erro = 1;
    }

    if ($erro == 0){
      
      $perfil = new Perfil($_POST["nome"], $_POST["turma"], $_POST["escola"], $_POST["email"], $_POST["password"]);

      array_push($usuarios, $perfil->getUser());


      $user = new User($_POST["email"], $_POST["password"]);
      
      $_SESSION["user"] = $user;
      
      header("location:homeLog.php");
      die();

    }

  }

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400&family=Schoolbell&display=swap" rel="stylesheet">
</head>

<header>
  <div class='header'>
      
      <div class='titulo'>
          <h1><a href="home.php" id='logo'>Vet Memories</a></h1>
          
          <ul>
              
              <li class='elemento'><button class='botao-menu'><a href="cadastro.php">Cadastro</a></button></li>     
              
              <li class='elemento'><button class='botao-menu'><a href="login.php">Login</a></button></li>
          </ul>
      </div>  
  </div>
</header>

<body>
    <div class="container">
        <h1>Cadastro</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" maxlength="40" required>

            <label for="nick">Nickname:</label>
            <input type="nome" maxlength="10" id="nick" name="nick" required>

            <label for="turma">Turma:</label>
            <input type="text" maxlength="5" id="turma" name="turma" required>

            <label for="escola">Escola:</label>
            <input type="text" id="escola" name="escola" maxlength="40" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Cadastrar</button>

            <p class="alert"><?php echo $nome_err ?> </p>
            <br>
        </form>

        <p>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a> </p>
    </div>
</body>

</html>