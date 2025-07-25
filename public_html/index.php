<?php
require 'includes/config.php';
$paginaTitulo = "Página Inicial";
include 'includes/header.php';

// Busca serviços no banco de dados (simulado para o exemplo)
$servicos = [
    ['icone' => 'fa-truck-fast', 'titulo' => 'Transporte Rápido', 'descricao' => 'Entregas expressas e dedicadas para todo o Brasil.'],
    ['icone' => 'fa-warehouse', 'titulo' => 'Armazenagem', 'descricao' => 'Soluções seguras e flexíveis para estocagem de produtos.'],
    ['icone' => 'fa-box-open', 'titulo' => 'Logística Integrada', 'descricao' => 'Gerenciamento completo da sua cadeia de suprimentos.'],
];
?>

<main>
    <section class="banner">
        <div class="container">
            <div class="banner-conteudo">
                <h1>Soluções em Logística que Impulsionam seu Negócio</h1>
                <p>Transporte, armazenagem e gerenciamento de ponta a ponta. A parceria certa para o crescimento da sua empresa.</p>
                <a href="#contato" class="btn btn-primario">Solicitar Orçamento</a>
            </div>
        </div>
    </section>

    <section id="servicos" class="section servicos-section">
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

    <section id="sobre" class="section sobre-section">
        <div class="container">
            <div class="sobre-container">
                <div class="sobre-imagem">
                    <img src="/assets/images/armazem-moderno.jpg" alt="Armazém Moderno da GD Logística">
                </div>
                <div class="sobre-conteudo">
                    <h2 class="section-titulo" style="text-align: left; margin-left: 0; margin-right: auto;">Sobre a Filial CGB</h2>
                    <p>Localizada estrategicamente em Cuiabá, nossa filial atende todo o estado de Mato Grosso com excelência em logística. Contamos com:</p>
                    <ul class="sobre-lista">
                        <li><i class="fas fa-check-circle"></i> Frota moderna e 100% rastreada.</li>
                        <li><i class="fas fa-check-circle"></i> Armazéns com controle de temperatura e umidade.</li>
                        <li><i class="fas fa-check-circle"></i> Equipe altamente qualificada e experiente.</li>
                        <li><i class="fas fa-check-circle"></i> Sistema de gestão (WMS) integrado e online.</li>
                    </ul>
                    <a href="#contato" class="btn btn-primario">Fale com um especialista</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="section contato-section">
        <div class="container">
            <h2 class="section-titulo">Entre em Contato</h2>
            <div class="contato-container">
                <div class="contato-info">
                    <h3>Informações de Contato</h3>
                    <p>Estamos prontos para atender você. Envie sua mensagem ou ligue para nós.</p>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Endereço</strong>
                            <p>Av. Historiador Rubens de Mendonça, 3000<br>Cuiabá - MT, 78055-500</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Telefone</strong>
                            <p>(65) 3025-0000</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>E-mail</strong>
                            <p>cgb@gdlogistica.com</p>
                        </div>
                    </div>
                </div>
                <form class="contato-form" method="post" action="/includes/enviar-contato.php">
                    <h3>Envie uma Mensagem</h3>
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
</main>

<?php include 'includes/footer.php'; ?>
