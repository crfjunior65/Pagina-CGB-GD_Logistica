<?php
require 'includes/config.php';
$paginaTitulo = "Página Inicial";
include 'includes/header.php';

// Busca serviços no banco de dados
$servicos = $pdo->query("SELECT * FROM servicos ORDER BY ordem ASC")->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="banner">
    <div class="container">
        <h1>GD Logística - Filial CGB/MT</h1>
        <p>Soluções completas em transporte e logística para:<br> Cuiabá e Região / Campo Grande e Região / São Paulo e Região</p>
        <a href="#contato" class="btn btn-primario">Solicitar Orçamento</a>
    </div>
</section>

<section id="servicos" class="servicos-section">
    <div class="container">
        <h2 class="section-titulo">Nossos Serviços</h2>
        
        <div class="servicos-grid">
            <?php foreach($servicos as $servico): ?>
            <div class="servico-card">
                <div class="servico-icone">
                    <i class="fas <?php echo $servico['icone']; ?>"></i>
                </div>
                <h3><?php echo $servico['titulo']; ?></h3>
                <p><?php echo $servico['descricao']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="sobre" class="sobre-section">
    <div class="container">
        <div class="sobre-conteudo">
            <h2 class="section-titulo">Sobre a Filial CGB</h2>
            <p>Localizada estrategicamente em Cuiabá, nossa filial atende todo o estado de Mato Grosso com excelência em logística. Contamos com:</p>
            
            <ul class="sobre-lista">
                <li><i class="fas fa-check"></i> Frota moderna e rastreada</li>
                <li><i class="fas fa-check"></i> Armazéns climatizados</li>
                <li><i class="fas fa-check"></i> Equipe especializada</li>
                <li><i class="fas fa-check"></i> Sistema de gestão integrado</li>
            </ul>
        </div>
        
        <div class="sobre-imagem">
            <img src="/assets/images/armazem.jpg" alt="Armazém GD Logística">
        </div>
    </div>
</section>

<section id="contato" class="contato-section">
    <div class="container">
        <h2 class="section-titulo">Entre em Contato</h2>
        
        <div class="contato-container">
            <div class="contato-info">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Av. Historiador Rubens de Mendonça, 3000<br>Cuiabá - MT</p>
                </div>
                
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <p>(65) 3025-0000</p>
                </div>
                
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <p>cgb@gdlogistica.com</p>
                </div>
            </div>
            
            <form class="contato-form" method="post" action="/includes/enviar-contato.php">
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Seu Nome" required>
                </div>
                
                <div class="form-group">
                    <input type="email" name="email" placeholder="Seu E-mail" required>
                </div>
                
                <div class="form-group">
                    <input type="tel" name="telefone" placeholder="Seu Telefone">
                </div>
                
                <div class="form-group">
                    <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primario">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
