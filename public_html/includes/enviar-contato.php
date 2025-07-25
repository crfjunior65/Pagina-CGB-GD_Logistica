<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Se você usar o Composer para instalar o PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitização e Validação dos Dados
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Tratar e-mail inválido
        header('Location: /contato-erro.php?erro=email_invalido');
        exit;
    }

    // 2. Configuração do PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Configurações do servidor
        $mail->isSMTP();
        $mail->Host       = 'smtp.seuservidor.com'; // Especifique o servidor SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'seu_email@seuservidor.com'; // Seu e-mail SMTP
        $mail->Password   = 'sua_senha_smtp'; // Sua senha SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Destinatários
        $mail->setFrom('nao-responda@gdlogistica.com', 'Site GD Logistica');
        $mail->addAddress('cgb@gdlogistica.com', 'Contato Filial CGB'); // E-mail que receberá a mensagem

        // Conteúdo do E-mail
        $mail->isHTML(true);
        $mail->Subject = 'Nova Mensagem do Site - Contato';
        $mail->Body    = "
            <h1>Nova mensagem recebida pelo site:</h1>
            <p><strong>Nome:</strong> {$nome}</p>
            <p><strong>E-mail:</strong> {$email}</p>
            <p><strong>Telefone:</strong> {$telefone}</p>
            <p><strong>Mensagem:</strong><br>{$mensagem}</p>
        ";
        $mail->AltBody = "Nome: {$nome}\nE-mail: {$email}\nTelefone: {$telefone}\nMensagem:\n{$mensagem}";

        $mail->send();
        header('Location: /contato-sucesso.php'); // Página de sucesso
    } catch (Exception $e) {
        // Logar o erro para depuração
        error_log("Erro ao enviar e-mail: {$mail->ErrorInfo}");
        header('Location: /contato-erro.php'); // Página de erro
    }
    exit;
} else {
    header('Location: /');
    exit;
}
?>