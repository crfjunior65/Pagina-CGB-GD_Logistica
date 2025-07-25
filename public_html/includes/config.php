<?php
// Configurações do banco de dados
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '4dm1n');
define('DB_NAME', 'gdlogistica_cgb');

// Configurações do site
define('SITE_NOME', 'GD Logística - Filial CGB/MT');
define('SITE_DESCRICAO', 'Soluções em transporte e logística para Cuiabá e região');

// Conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado com Sucesso com PDO" . $e->getMessage();
} catch(PDOException $e) {
    die("ERRO: Não foi possível conectar. " . $e->getMessage());
}

// Funções globais
include 'includes/functions.php';
?>
