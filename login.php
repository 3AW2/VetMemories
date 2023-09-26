<?php
  session_start();
  include "User.php";

  if(isset($_SESSION["user"])){
    header("location:home.php");
    die();
  } else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $user = new User($_POST["email"], $_POST["password"]);
      $_SESSION["user"] = $user;
      header("location:home.php");
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
    <link rel="stylesheet" href="styles.css">
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
        <h1>Login</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Logar</button>
        </form>

        <p>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a> </p>
    </div>
</body>

</html>