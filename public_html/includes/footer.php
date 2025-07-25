<?php
/**
 * Footer GD Logística - Filial CGB/MT
 * Data: <?= date('d/m/Y'); ?>
 */

// Verifica se a variável do ano inicial está definida
$ano_inicial = defined('ANO_FUNDACAO') ? ANO_FUNDACAO : date('Y');
$ano_atual = date('Y');
?>
<footer class="footer bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Seção Sobre -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-warning">GD Logística</h5>
                <p>Transporte e logística com excelência para Cuiabá e região.</p>
                <div class="social-icons">
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Links Rápidos -->
            <div class="col-md-2 mb-4 mb-md-0">
                <h5 class="text-warning">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-white">Home</a></li>
                    <li><a href="/servicos" class="text-white">Serviços</a></li>
                    <li><a href="/contato" class="text-white">Contato</a></li>
                    <li><a href="/sobre" class="text-white">Sobre Nós</a></li>
                </ul>
            </div>

            <!-- Contato -->
            <div class="col-md-3 mb-4 mb-md-0">
                <h5 class="text-warning">Contato</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt me-2"></i> Av. Industrial, 1000 - Cuiabá/MT</li>
                    <li><i class="fas fa-phone me-2"></i> (65) 3025-0000</li>
                    <li><i class="fas fa-envelope me-2"></i> cgb@gdlogistica.com</li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-md-3">
                <h5 class="text-warning">Newsletter</h5>
                <form action="/includes/newsletter.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Seu e-mail" required>
                        <button class="btn btn-warning" type="submit">Assinar</button>
                    </div>
                </form>
            </div>
        </div>

        <hr class="my-4 bg-secondary">

        <!-- Copyright -->
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; <?= $ano_inicial == $ano_atual ? $ano_atual : $ano_inicial . ' - ' . $ano_atual ?> GD Logística. Todos os direitos reservados.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">
                    <a href="/politica-de-privacidade" class="text-white me-3">Política de Privacidade</a>
                    <a href="/termos-de-uso" class="text-white">Termos de Uso</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>
