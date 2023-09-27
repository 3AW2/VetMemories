<?php
session_start();
include "../User.php";
$erro = "";

if (!empty($_GET["acao"])) {
  if ($_GET["acao"] == "dark") {
    if (empty($_COOKIE["mode"])) {
      setcookie("mode", "dark", time() + 60000000, "/");
      header("location:login.php");
    } elseif ($_COOKIE["mode"] == "dark") {
      setcookie("mode", "light", time() + 6000000, "/");
      header("location:login.php");
    } else {
      setcookie("mode", "dark", time() + 60000000, "/");
      header("location:login.php");
    }
  }
}

$pessoa1 = new User("amanda@gmail.com", "4321");
$pessoa2 = new User("analu@gmail.com", "1234");
$pessoa3 = new User("tuco@gmail.com", "abcd");

$usuarios = array($pessoa1, $pessoa2, $pessoa3);

if (isset($_SESSION["user"])) {
  header("location:home.php");
  die();
} else {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new User($_POST["email"], $_POST["password"]);

    foreach ($usuarios as $u) {
      if ($user->equals($u)) {
        $_SESSION["user"] = $user;
        header("location:homeLog.php");
        die();
      }
    }

    $erro = "Email ou senha incorretos";

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
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400&family=Schoolbell&display=swap"
    rel="stylesheet">
</head>

<header>
  <div class='header'>

    <div class=<?php echo "titulo" . $mode ?>>
      <h1><a href="home.php" id='logo'>Vet Memories</a></h1>

      <ul>
        <li class=<?php echo "elemento" . $mode ?>>
          <form action="login.php" method="get">
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
        <h3 class=<?php echo "texto" . $mode ?>>Faça seu login no VetMemories</h>
      </div>
      <br>
      <div class="dados">
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <p><b><label for="email">Email:</label></b>
            <input type="text" class="text-login" id="email" name="email" required>
          </p>
          <br>
          <p><b><label for="password">Senha:</label></b>
            <input type="password" class="text-login" id="password" name="password" required>
          </p>
          <p class="alert">
            <?php echo $erro ?>
          </p>
          <br>
          <button type="submit" class="botao-menu">Entrar</button>
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