<?php
session_start();
if (!empty($_GET["acao"])) {
    if ($_GET["acao"] == "dark") {
        if (empty($_COOKIE["mode"])) {
            setcookie("mode", "dark", time() + 60000000, "/");
            header("location:home.php");
        } elseif ($_COOKIE["mode"] == "dark") {
            setcookie("mode", "light", time() + 6000000, "/");
            header("location:home.php");
        } else {
            setcookie("mode", "dark", time() + 60000000, "/");
            header("location:home.php");
        }
    } else {
        session_destroy();
    }
}
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    $refLogo = "homeLog.php";
} else {
    $refLogo = "home.php";
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
    <title>VetMemories</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400&family=Schoolbell&display=swap"
        rel="stylesheet">
</head>

<body class=<?php echo "body" . $mode ?>>
    <header>

        <div class='header'>
            <div class=<?php echo "titulo" . $mode ?>>
                <h1><a href=<?php echo $refLogo ?> id='logo'>Vet Memories</a></h1>
                <?php
                if (!isset($_SESSION["user"])) { ?>
                    <ul>
                        <li class=<?php echo "elemento" . $mode ?>>
                            <form action="home.php" method="get">
                                <button type="submit" name="acao" value="dark" class=<?php echo "botao-menu" . $mode ?>>
                                    <img src="../imagens/night-mode.png" style="max-width: 2vw;"> </button>
                            </form>
                        </li>

                        <li class=<?php echo "elemento" . $mode ?>><button class=<?php echo "botao-menu" . $mode ?>><a
                                    href="./cadastro.php">Cadastro</a></button></li>

                        <li class=<?php echo "elemento" . $mode ?>><button class=<?php echo "botao-menu" . $mode ?>><a
                                    href="./login.php">Login</a></button></li>
                    </ul>

                    <?php
                } else { ?>
                    <ul>
                        <li class=<?php echo "elemento" . $mode ?>>
                            <form action="homeLog.php" method="get">
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
                    <?php
                } ?>

            </div>
        </div>

        </div>

    </header>


    <main>
        <div class='div-destaque'>
            <section class="destaque">

                <div class=<?php echo "subtitulo" . $mode ?>>
                    <h2>CONHEÇA NOSSO SITE</h2>
                </div>

                <div class='caixa'>

                    <div class=<?php echo "texto" . $mode ?>>
                        <p>O Vet Memories foi criado com o intuito de que você possa guardar as suas memórias de
                            veterano. Se o IF é é um espaço que permite construir diversas lembranças, porque não
                            guardá-las com carinho digitalmente? </p>

                        <p class='destacar-texto'>O tempo pode passar, mas memória a gente guarda ❤</p>
                    </div>

                </div>

                <div class=<?php echo "subtitulo" . $mode ?> id='texto-nos'>
                    <h2>QUEM NÓS SOMOS?</h2>
                </div>

                <div class='caixa'>

                    <div class=<?php echo "texto" . $mode ?>>
                        <p> Somos estudantes do 4° ano do curso Técnico de Informática Integrado ao Ensino Médio.
                            Criamos esse projeto a fim de elaborar uma ferramenta que possa registrar os momentos que
                            compõem nossos laços de amizade 🤗! Assim, a nossa equipe é formada pelos integrantes:</p>

                    </div>

                </div>


                <div class='caixa-criadores'>

                    <div class=<?php echo "itens-img-legenda" . $mode ?>>
                        <img src="..\imagens\amandinha.png" alt="Foto da criadora Amanda">
                        <p>Amanda Maria</p>
                    </div>

                    <div class=<?php echo "itens-img-legenda" . $mode ?>>
                        <img src="..\imagens\analu.png" alt="Foto da criadora Ana Luisa">
                        <p>Ana Luisa</p>
                    </div>

                    <div class=<?php echo "itens-img-legenda" . $mode ?>>
                        <img src="..\imagens\arthur.png" alt="Foto do criador Arthur">
                        <p>Arthur de Melo</p>
                    </div>

                </div>



        </div>

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