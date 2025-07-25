<?php
require_once __DIR__.'/../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Processar dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    // Validações e processamento aqui
    
    // Redirecionamento após cadastro
    header('Location: /cadastro-sucesso.php');
    exit;
} else {
    header('Location: /');
    exit;
}
