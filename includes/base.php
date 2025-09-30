<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Brisa & Aroma</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Bootstrap CDN -->
    <link id="themeLink" href="https://bootswatch.com/5/sketchy/bootstrap.min.css" rel="stylesheet">

    <!-- Seu CSS -->
    <link rel="stylesheet" href="static/css/style.css">

    <!-- CSS do AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<!-- Barra de navegação -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Brisa & Aroma</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="servicos.php">Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Conteúdo dinâmico -->
<div class="py-3">
    <?php
    // Aqui entra o conteúdo de cada página
    if (isset($content)) {
        echo $content;
    }
    ?>
</div>

<!-- Rodapé -->
<footer class="bg-dark text-light text-center py-4 mt-5">
    © 2025 Brisa & Aroma | Todos os direitos reservados.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS do AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 400,
        easing: 'ease-out',
        once: true,
        offset: 80,
        delay: 0
    });
</script>

</body>
</html>
