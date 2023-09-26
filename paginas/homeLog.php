<?php
session_start();
if (!empty($_GET["acao"])) {
    session_destroy();
}
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
    <link rel="stylesheet" href="../styles.css"> 
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

                <div class='subtitulo'>
                    <h2>MINHAS MEMÓRIAS</h2>
                </div>
                <br>


                <div>
                <button id="openModal" class="botao-modal">+</button>
                </div>
            </section>
        </div>

        <div class="memoriasContainer">
            <section class= "section-memorias">
                <div class="titulo-memorias">
                    <h2>primeira memóriasla</h2>
                </div>
            </section>
        </div>

        <div id="myModal" class="modal" aria-modal="true" role="dialog">
            <div class="modal-content">
                <button class="close" aria-label="Fechar modal">&times;</button>
                <form id="memoriaForm">
                    <h2><label for="memoria">Guarde a sua memória</label></h2>
                    <br><br>
                    <label for="memoria" id='label-memoria'><input type="text" id="memoria" name="memoria" required> </label>
                    <br><br>
                    <button type="submit" class='botao-salvar'>Salvar</button>
                </form>
            </div>
        </div>

        <?php

        ?>
    </main>

    <footer class= 'footer'>
        <p>&copy;
            <?php echo date("Y"); ?> VetMemories
        </p>
    </footer>

    <script src="modalFunctions.js" type="module"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('myModal');
            const btn = document.getElementById('openModal');
            const closeBtn = document.querySelector('.close');
            
            btn.addEventListener('click', function() {
                modal.style.display = 'block';
            });
            closeBtn.addEventListener('click', function() {
                modal.style.display = 'none';
            });
            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>