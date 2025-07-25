<?php
/**
 * Arquivo functions.php básico
 * Contém funções essenciais para a aplicação
 */

function connectDatabase() {
    // Implementação da conexão com banco de dados
}

function sanitizeInput($data) {
    // Implementação de sanitização de dados
    return htmlspecialchars(strip_tags(trim($data)));
}
