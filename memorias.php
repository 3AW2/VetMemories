<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetMemories</title>
    <link rel="stylesheet" href="styles.css"> <!-- Adicione seu arquivo CSS aqui -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;400&family=Schoolbell&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class='titulo'>
            <h1><a href="home.php">Vet Memories</a></h1>
        </div>
        
    </header>

    <div class="menu-lateral">
        <ul>
            <li><a href="#">Página Inicial</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </div>
    <div class="conteudo">
        <!-- Conteúdo da página aqui -->
    </div>
    
    
    <main>
        <div class='div-destaque'>
            <section class="destaque">
               
                <?php
                // Aqui você pode incluir o código PHP para buscar e exibir a notícia em destaque
                // Por exemplo: $noticiaDestaque = obterNoticiaDestaque(); // função hipotética
                // Em seguida, exiba o título, imagem e resumo da notícia em destaque
                ?>

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
        <p>&copy; <?php echo date("Y"); ?> VetMemories</p>
    </footer>
</body>
</html>
