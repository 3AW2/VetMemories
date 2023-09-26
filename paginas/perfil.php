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
                <h1><a href="home.php" id='logo'>Vet Memories</a></h1>
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
                            <form action="home.php" method="get">
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
                <h2>Conheça o Vet Memories</h2>
                <h3>
                    <?php echo "descreve aqui um pouco do projeto"; ?>
                </h3>
                <img src="<?php echo "caminhodafoto" ?>" alt="Imagem sobre o site (ou n)">
                <p>
                    <?php echo "oieeeeeee"; ?>
                </p>

                <h2>Mais vantagens do nosso site</h2>
            </section>
        </div>

    </main>

    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> VetMemories
        </p>
    </footer>
</body>

</html>