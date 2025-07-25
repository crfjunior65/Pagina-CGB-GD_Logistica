<?php
$paginaTitulo = "Erro no Envio";
include 'includes/header.php';
?>

<section class="feedback-section text-center">
    <div class="container">
        <i class="fas fa-times-circle fa-5x error-icon"></i>
        <h2 class="section-titulo">Ocorreu um Erro!</h2>
        <p>Não foi possível enviar sua mensagem no momento. <br>Por favor, tente novamente mais tarde ou entre em contato por telefone.</p>
        <a href="/index.php#contato" class="btn btn-primario">Tentar Novamente</a>
    </div>
</section>

<style>
.feedback-section { padding: 120px 0; }
.error-icon { color: #dc3545; margin-bottom: 30px; }
</style>

<?php include 'includes/footer.php'; ?>
