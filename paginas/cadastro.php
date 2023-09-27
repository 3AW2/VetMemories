<?php
  session_start();
  include "../Perfil.php";

  $nome_err = " ";

  if (!empty($_GET["acao"])) {
    if ($_GET["acao"] == "dark") {
      if (empty($_COOKIE["mode"])) {
        setcookie("mode", "dark", time() + 60000000, "/");
        header("location:cadastro.php");
      } elseif ($_COOKIE["mode"] == "dark") {
        setcookie("mode", "light", time() + 6000000, "/");
        header("location:cadastro.php");
      } else {
        setcookie("mode", "dark", time() + 60000000, "/");
        header("location:cadastro.php");
      }
    }
  }

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

  if (!empty($_COOKIE["mode"]) && $_COOKIE["mode"] == "dark") {
    $mode = "-dark";
  } else {
    $mode = "";
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

    <div class=<?php echo "titulo" . $mode ?>>
      <h1><a href="home.php" id='logo'>Vet Memories</a></h1>

      <ul>
        <li class=<?php echo "elemento" . $mode ?>>
          <form action="cadastro.php" method="get">
            <button type="submit" name="acao" value="dark" class=<?php echo "botao-menu" . $mode ?>>
              <img src="../imagens/night-mode.png" style="max-width: 2vw;"> </button>
          </form>
        </li>

        <li class=<?php echo "elemento" . $mode ?>><button class=<?php echo "botao-menu" . $mode ?>><a
              href="cadastro.php">Cadastro</a></button></li>

        <li class=<?php echo "elemento" . $mode ?>><button class=<?php echo "botao-menu" . $mode ?>><a
              href="login.php">Login</a></button></li>
      </ul>
    </div>
  </div>
</header>

<body class=<?php echo "body" . $mode ?>>
  <div class='div-destaque'>
  </div>
  <div class='div-destaque'>
    <section class=<?php echo "dados-subtitulo" . $mode ?>>
      <div>
        <h3 class=<?php echo "texto" . $mode ?>>Faça seu cadastro no VetMemories</h3>
      </div>
      <br>
      <div class="dados-cadastro">
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p><b><label for="nome">Nome:</label>
            <input type="text" class="text-login" id="nome" name="nome" maxlength="40" required></p></b><br>

            <p><b><label for="nick">Nickname:</label>
            <input type="nome" class="text-login" maxlength="10" id="nick" name="nick" required></p></b><br>

            <p><b><label for="turma">Turma:</label>
            <input type="text" class="text-login" maxlength="5" id="turma" name="turma" required></p></b><br>

            <p><b><label for="escola">Escola:</label>
            <input type="text" class="text-login" id="escola" name="escola" maxlength="40" required></p></b><br>

            <p><b><label for="email">Email:</label>
            <input type="email" class="text-login" id="email" name="email" required></p></b><br>

            <p><b><label for="password">Senha:</label>
            <input type="password" class="text-login" id="password" name="password" required></p></b><br>

            <button type="submit" class="botao-menu">Cadastrar</button>

            <p class="alert"><?php echo $nome_err ?> </p>
            <br>
        </form>
      </div><br>
      <div>
        </form>
        <p>Não tem cadastro?
          <a href="cadastro.php">Cadastre-se</a>
        </p>
      </div><br><br>
    </section>
  </div>
  <div class="container">
  </div>
</body>

</html>