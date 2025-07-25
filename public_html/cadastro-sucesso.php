<?php
$paginaTitulo = "Sucesso no Cadastro";
include 'includes/header.php';
?>

<section class="feedback-section text-center">
    <div class="container">
        <i class="fas fa-check-circle fa-5x success-icon"></i>
        <h2 class="section-titulo">Cadastro Realizado com Sucesso!</h2>
        <p>Sua conta foi criada. Agora você pode aproveitar todos os nossos recursos.</p>
        <a href="/login.php" class="btn btn-primario">Fazer Login</a>
    </div>
</section>

<style>
.feedback-section { padding: 120px 0; }
.success-icon { color: #28a745; margin-bottom: 30px; }
</style>

<?php include 'includes/footer.php'; ?>
