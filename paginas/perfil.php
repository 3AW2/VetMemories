<?php
session_start();
include "../Perfil.php";

if (!empty($_GET["acao"])) {
    if ($_GET["acao"] == "dark") {
        if (empty($_COOKIE["mode"])) {
            setcookie("mode", "dark", time() + 60000000, "/");
            header("location:perfil.php");
        } elseif ($_COOKIE["mode"] == "dark") {
            setcookie("mode", "light", time() + 6000000, "/");
            header("location:perfil.php");
        } else {
            setcookie("mode", "dark", time() + 60000000, "/");
            header("location:perfil.php");
        }
    }
}
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
}
if (!empty($_COOKIE["mode"]) && $_COOKIE["mode"] == "dark") {
    $mode = "-dark";
} else {
    $mode = "";
}

$pessoa1 = new Perfil("aferreiras", "Amanda Maria", "4º ano", "IFSP", "amanda@gmail.com", "4321", "oieeeeeeeeeeeeeeeeeeeeeeeeee");
$pessoa2 = new Perfil("tucomego", "Arthur de Melo", "4º ano", "IFSP", "tuco@gmail.com", "4321", "Sou um aluno que vai tirar 9 em AW2 !");
$pessoa3 = new Perfil("analuOl", "Ana Luisa", "4º ano", "IFSP", "analu@gmail.com", "4321", "Sou uma aluna que vai tirar 9 em AW2 !");

$usuarios = array($pessoa1, $pessoa2, $pessoa3);

// foreach ($usuarios as $p) {
//     if ($p->getNickName() == "aferreiras") {
//         $pessoaLogada = $p;
//     } 
// }

$pessoaLogada = $pessoa1;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetMemories</title>
    <link rel="stylesheet" href="../styles.css"> <!-- Adicione seu arquivo CSS aqui -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400&family=Schoolbell&display=swap"
        rel="stylesheet">
</head>

<body class=<?php echo "body" . $mode ?>>
    <header>

        <div class='header'>
            <div class=<?php echo "titulo" . $mode ?>>
                <h1><a href="homeLog.php" id='logo'>Vet Memories</a></h1>
                <ul>
                    <li class=<?php echo "elemento" . $mode ?>>
                        <form action="perfil.php" method="get">
                            <button type="submit" name="acao" value="dark" class=<?php echo "botao-menu" . $mode ?>>
                                <img src="../imagens/night-mode.png" style="max-width: 2vw;"> </button>
                        </form>
                    </li>

                    <li class=<?php echo "elemento" . $mode ?>>
                        <form action="home.php" method="get">
                            <button type="submit" name="acao" value="Sair" class=<?php echo "botao-menu" . $mode ?>>Sair</button>
                        </form>
                    </li>

                    <li class=<?php echo "elemento" . $mode ?>><button class=<?php echo "botao-menu" . $mode ?>><a
                                href="perfil.php">Perfil</a></button>
                    </li>

                </ul>

            </div>
        </div>

        </div>

    </header>


    <main>
        <div class='div-destaque'>
            <section class="destaque">
                <div class=<?php echo "subtitulo" . $mode ?>>
                    <h2>PERFIL</h2>
                </div>
            </section>
        </div>
        <div class='div-destaque'>
            <section class="dados-subtitulo">
                <div>
                    <h2>

                    </h2>
                </div>
                <br>
                <div class="dados">
                    <p><b>Nome:
                            <?php echo $pessoaLogada->getNome() ?>
                        </b></p><br>
                    <p><b>Ano:
                            <?php echo $pessoaLogada->getAnoEscolar() ?>
                        </b></p><br>
                    <p><b>Escola:
                            <?php echo $pessoaLogada->getEscola() ?>
                        </b></p><br>
                </div><br>
                <div>
                    <h2>Biografia</h2><br><br>
                    <label for="bio" class="bio"><input type="text-bio" value=<?php echo $pessoaLogada->getBiografia() ?>></label>
                </div><br><br>
            </section>
        </div>
    </main>

    <footer class='footer'>
        <p>&copy;
            <?php echo date("Y"); ?> VetMemories
        </p>
    </footer>
</body>

</html>