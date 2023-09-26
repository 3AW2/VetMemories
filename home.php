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
    <link rel="stylesheet" href="styles.css"> <!-- Adicione seu arquivo CSS aqui -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400&family=Schoolbell&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        
            <?php
            if (!isset($_SESSION["user"])) {

                ?>
                <div class='header'>
                    <div class='titulo'>
                        <h1><a href="home.php" id='logo'>Vet Memories</a></h1>
                        <ul>
                            
                            <li class='elemento'><button class='botao-menu'><a href="cadastro.php">Cadastro</a></button></li>     
                            
                            <li class='elemento'><button class='botao-menu'><a href="login.php">Login</a></button></li>

                        </ul>
                    </div>
                </div>
            <?php
            } else {

                ?>
                <ul>

                    <li class='elemento'><button class='botao-menu'><a href="paginas/memorias.php">Memorias</a></button></li>

                    <li class='elemento'><button class='botao-menu'><a href="paginas/perfil.php">Perfil</a></button></li>
                </ul>
                <?php
            }
            ?>

        </div>
     
    </header>


    <main>
        <div class='div-destaque'>
            <section class="destaque">
               
                <div class='subtitulo'>
                    <h2>CONHEÇA NOSSO SITE</h2>
                </div>

                <div class='caixa'>
                    
                    <div class='texto'>
                        <p>O Vet Memories foi criado com o intuito de que você possa guardar as suas memórias de veterano. Se o IF é é um espaço que permite construir diversas lembranças, porque não guardá-las com carinho digitalmente? </p>

                        <p class='destacar-texto'>O tempo pode passar, mas memória a gente guarda ❤</p>
                    </div>

                </div>

                <div class='subtitulo' id='texto-nos'>
                    <h2>QUEM NÓS SOMOS?</h2>
                </div>

                <div class='caixa'>
            
                    <div class='texto'>
                        <p> Somos estudantes do 4° ano do curso Técnico de Informática Integrado ao Ensino Médio. Criamos esse projeto a fim de elaborar uma ferramenta que possa registrar os momentos que compõem nossos laços de amizade 🤗! Assim, a nossa equipe é formada pelos integrantes:</p>

                    </div>

                </div>
               

                <div class='caixa-criadores'>

                    <div class='itens-img-legenda'>
                        <img src=".\imagens\amandinha.png" alt="Foto da criadora Amanda">
                        <p>Amanda Maria</p>
                    </div>

                    <div class='itens-img-legenda'>
                        <img src=".\imagens\analu.png" alt="Foto da criadora Ana Luisa">
                        <p>Ana Luisa</p>
                    </div>

                    <div class='itens-img-legenda'>
                        <img src=".\imagens\arthur.png" alt="Foto do criador Arthur">
                        <p>Arthur de Melo</p>
                    </div>
                
                </div>

    
                    
                </div>


                <!-- <h2>Mais vantagens do nosso site</h2> -->
                    <?php
                    // Sla bota oq quiser aqui
                    ?>
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