<?php
session_start();
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
}
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

<body>
    <header>

        <div class='header'>
            <div class='titulo'>
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

                        <li class='elemento'>
                            <form action="homeLog.php" method="get">
                                <button type="submit" name="acao" value="Sair" class='botao-menu'>Sair</button>
                            </form>
                        </li>
                        <li class='elemento'><button class='botao-menu'><a href="memorias.php">Memorias</a></button>
                        </li>

                        <li class='elemento'><button class='botao-menu'><a href="perfil.php">Perfil</a></button>
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
                <div class="subtitulo">
                    <h2>PERFIL</h2>
                </div>
            </section>
        </div>
        <div class='div-destaque'>
            <section class="dados-subtitulo">
                <div>
                    <h2><!-- ?php
                        echo $user
                    ? --> user</h2>
                </div>
                <br>
                <div class= "dados">
                    <p><b>Nome:</b></p><br>
                    <p><b>Turma:</b></p><br>
                    <p><b>Escola:</b></p><br>
                    <p><b>Email:</b></p><br>
                </div><br>
                <div>
                    <h2>Biografia</h2><br><br>
                    <label for="bio" class="bio"><input type="text"></label>
                </div><br><br>
            </section>
        </div>
    </main>

    <footer class= 'footer'>
        <p>&copy;
            <?php echo date("Y"); ?> VetMemories
        </p>
    </footer>
</body>

</html>