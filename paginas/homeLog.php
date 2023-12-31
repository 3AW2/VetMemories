<?php
session_start();
if (!empty($_GET["acao"])) {
    if ($_GET["acao"] == "dark") {
        if (empty($_COOKIE["mode"])) {
            setcookie("mode", "dark", time() + 6000000, "/");
            header("location:homeLog.php");
        } elseif ($_COOKIE["mode"] == "dark") {
            setcookie("mode", "light", time() + 60000000, "/");
            header("location:homeLog.php");
        } else {
            setcookie("mode", "dark", time() + 6000000, "/");
            header("location:homeLog.php");
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["titulo"])) {
    $titulo = $_POST["titulo"];
    $data = $_POST["data"];
    $comoFoi = $_POST["comoFoi"];
}
$titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
$data = isset($_POST["data"]) ? $_POST["data"] : "";
$comoFoi = isset($_POST["comoFoi"]) ? $_POST["comoFoi"] : "";
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
                <h1><a href="homeLog.php" id='logo'>Vet Memories</a></h1>
                <?php
                if (!isset($_SESSION["user"])) { ?>

                    <ul>
                        <li class='elemento'><button class='botao-menu'><a href="./cadastro.php">Cadastro</a></button></li>

                        <li class='elemento'><button class='botao-menu'><a href="./login.php">Login</a></button></li>
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

                        <li class=<?php echo "elemento" . $mode ?>><button class=<?php echo "botao-menu" . $mode ?>><a href="perfil.php">Perfil</a></button>
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
                    <h2>MINHAS MEMÓRIAS</h2>
                </div>
                <br>
                <div>
                    <button id="openModal" class="botao-modal">+</button>
                </div>
            </section>
        </div>

        <!-- memória fixa -->
        <div class="memoria1Container">
            <div class='section-memorias'>
                <section class="dados-subtitulo">
                    <div><h2><p><b><?php
                    if ($titulo == null) {
                        echo "Adicione uma memória";
                    }
                    else{
                    echo $titulo;
                    }?></b></p></h2> 
                    </div>
                    <br><br>
                    <h3><p><b><?php
                    if ($data == null) {
                        echo " ";
                    }
                    else{
                    echo $data;
                    }?></b></p></h3> 
                    <br><br>
                    <h3><p><b><?php
                    if ($comoFoi == null) {
                        echo " ";
                    }
                    else{
                    echo $comoFoi;
                    }?></b></p></h3> 
                    <br><br>    
                </section>
            </div>
        </div>

        <!-- modal -->
        <div id="myModal" class="modal" aria-modal="true" role="dialog">
            <div class="modal-content">
                <button class="close" aria-label="Fechar modal">&times;</button>
                <form id="memoriaForm" method="post" action="">
                    <h2><label for="titulo">Guarde a sua memória</label></h2>
                    <br><br>
                    <label for="titulo" id='label-memoria'> <p><b>Título da memória</b></p> <br><input type="text-titulo" id="titulo" name="titulo" required> </label>
                    <br><br>
                    <label for="data" id='label-memoria'> <p><b>Data</b></p> <br><input type="date" class="date-memoria-modal" id="data" name="data" required> </label>
                    <br><br>
                    <label for="comoFoi" id='label-memoria'><p><b>Como foi</b></p> <br><input type="text-modal" id="comoFoi" name="comoFoi" class="text-modal" required> </label>
                    <br><br>
                    <button type="submit" class='botao-salvar'>Salvar</button>
                </form>
            </div>
        </div>
        <?php
        ?>
    </main>

    <footer class='footer'>
        <p>&copy;
            <?php echo date("Y"); ?> VetMemories
        </p>
    </footer>

    <script src="modalFunctions.js" type="module"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('myModal');
            const btn = document.getElementById('openModal');
            const closeBtn = document.querySelector('.close');

            btn.addEventListener('click', function () {
                modal.style.display = 'block';
            });
            closeBtn.addEventListener('click', function () {
                modal.style.display = 'none';
            });
            modal.addEventListener('click', function (event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
