<?php
require 'includes/config.php';
$paginaTitulo = "Cadastro de Cliente";
include 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha']; // A senha será tratada com password_hash

    // Validação simples
    if (empty($nome) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($senha)) {
        $erro = "Por favor, preencha todos os campos corretamente.";
    } else {
        // Verificar se o e-mail já existe
        $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $erro = "Este e-mail já está cadastrado.";
        } else {
            // Hash da senha
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            // Inserir no banco de dados
            $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
            if ($stmt->execute([$nome, $email, $senhaHash])) {
                header("Location: cadastro-sucesso.php");
                exit;
            } else {
                $erro = "Ocorreu um erro ao realizar o cadastro. Tente novamente.";
            }
        }
    }
}
?>

<section class="cadastro-section">
    <div class="container">
        <h2 class="section-titulo">Cadastro de Novo Cliente</h2>
        <p class="text-center">Crie sua conta para acessar nossos serviços exclusivos.</p>

        <div class="form-container">
            <?php if (isset($erro)): ?>
                <div class="alert alert-danger"><?php echo $erro; ?></div>
            <?php endif; ?>

            <form method="post" action="cadastro.php">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn btn-primario">Cadastrar</button>
            </form>
        </div>
    </div>
</section>

<style>
.cadastro-section { padding: 120px 0; }
.form-container { max-width: 500px; margin: 30px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
.form-group { margin-bottom: 20px; }
.form-group label { display: block; margin-bottom: 8px; font-weight: 500; }
.form-group input { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 4px; }
.alert { padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px; margin-bottom: 20px; }
</style>

<?php include 'includes/footer.php'; ?>
