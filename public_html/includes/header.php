<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NOME; ?> | <?php echo $paginaTitulo ?? ''; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <meta name="description" content="<?php echo SITE_DESCRICAO; ?>">
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="/" class="logo">
                <img src="/images/logo.png" alt="GD Logística">
            </a>
            
            <nav class="nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
            
            <button class="menu-mobile">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <script src="/assets/js/main.js"></script>
