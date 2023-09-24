<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetMemories</title>
    <link rel="stylesheet" href="styles.css"> <!-- Adicione seu arquivo CSS aqui -->
</head>
<body>
    <header>
        <h1>VetMemories</h1>
        <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="noticias.php">Cadastro</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="destaque">
            <h2>Conheça o Vet Memories</h2>
            <?php
            // Aqui você pode incluir o código PHP para buscar e exibir a notícia em destaque
            // Por exemplo: $noticiaDestaque = obterNoticiaDestaque(); // função hipotética
            // Em seguida, exiba o título, imagem e resumo da notícia em destaque
            ?>
            <h3><?php echo "descreve aqui um pouco do projeto"; ?></h3>
            <img src="<?php echo "caminhodafoto" ?>" alt="Imagem sobre o site (ou n)">
            <p><?php echo "oieeeeeee"; ?></p>
        </section>

        <section class="ultimas-noticias">
            <h2>Mais vantagens do nosso site</h2>
            <?php
            // Sla bota oq quiser aqui
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> VetMemories</p>
    </footer>
</body>
</html>
