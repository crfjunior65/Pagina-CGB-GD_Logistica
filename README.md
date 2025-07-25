# Site Institucional - GD Logística (Filial CGB)

Este é o repositório do site institucional da filial de Cuiabá (CGB) da GD Logística. O projeto foi desenvolvido para apresentar a empresa, seus serviços e facilitar o contato e o cadastro de novos clientes, com um design moderno e responsivo.

## ✨ Funcionalidades Principais

- **Página Institucional:** Apresentação da empresa com seções de Serviços, Sobre e Contato.
- **Design Moderno e Responsivo:** Interface adaptável a desktops, tablets e celulares.
- **Formulário de Contato Funcional:** Envio de e-mails para o administrador através de um servidor SMTP, utilizando a biblioteca PHPMailer para mais segurança e confiabilidade.
- **Cadastro de Clientes:** Sistema de registro de novos usuários com validação de dados e armazenamento seguro de senhas (hash).
- **Menu Mobile:** Menu "hambúrguer" para facilitar a navegação em dispositivos móveis.

---

## 🛠️ Tecnologias Utilizadas

- **Frontend:**
  - HTML5
  - CSS3 (com variáveis para fácil customização)
  - JavaScript (ES6)
- **Backend:**
  - PHP 8+
  - PHPMailer para envio de e-mails
- **Banco de Dados:**
  - MySQL

---

## 📂 Estrutura do Projeto

A raiz do servidor web (`DocumentRoot`) deve apontar para a pasta `public_html/`.

```
/home/junior/Dados/GD-Logistica/CGB/Pagina-CGB-GD_Logistica/
├── public_html/        # Raiz do servidor web (DocumentRoot)
│   ├── assets/
│   │   ├── css/style.css       # Folha de estilos principal
│   │   ├── js/main.js          # Scripts JavaScript (ex: menu mobile)
│   │   └── images/             # Imagens do site (logo, banners, etc.)
│   ├── includes/
│   │   ├── config.php          # Configurações de banco de dados e do site
│   │   ├── enviar-contato.php  # Processa o formulário de contato
│   │   ├── header.php          # Cabeçalho e menu de navegação
│   │   └── footer.php          # Rodapé e scripts (se existir)
│   ├── index.php             # Página inicial
│   ├── cadastro.php          # Página de cadastro de clientes
│   ├── cadastro-sucesso.php  # Página de feedback positivo
│   └── contato-erro.php      # Página de feedback negativo
├── vendor/                 # Dependências do Composer (gerado após `composer install`)
├── composer.json           # Arquivo de configuração do Composer
└── README.md               # Este arquivo
```

---

## 🚀 Instalação e Configuração

Siga os passos abaixo para configurar o ambiente de desenvolvimento.

### Pré-requisitos

- PHP 8 ou superior
- Servidor Web (Apache, Nginx, etc.)
- MySQL
- Composer

### Passos

1.  **Clone o repositório:**
    ```bash
    git clone <URL_DO_REPOSITORIO>
    cd Pagina-CGB-GD_Logistica
    ```

2.  **Instale as dependências PHP:**
    Se não houver um arquivo `composer.json`, crie um com o seguinte conteúdo e depois execute o comando.
    ```json
    {
        "require": {
            "phpmailer/phpmailer": "^6.5"
        }
    }
    ```
    Execute a instalação:
    ```bash
    composer install
    ```

3.  **Configure o Banco de Dados:**
    - Crie um banco de dados no MySQL (ex: `gdlogistica_cgb`).
    - Execute o script SQL abaixo para criar a tabela `usuarios`:
      ```sql
      CREATE TABLE `usuarios` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `nome` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `senha` varchar(255) NOT NULL,
        `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`),
        UNIQUE KEY `email` (`email`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
      ```

4.  **Configure as credenciais:**
    - **Banco de Dados:** Abra o arquivo `public_html/includes/config.php` e atualize as constantes `DB_HOST`, `DB_USER`, `DB_PASS` e `DB_NAME` com suas credenciais.
    - **Envio de E-mail:** Abra o arquivo `public_html/includes/enviar-contato.php` e preencha as configurações do servidor SMTP (Host, Username, Password, Port).

5.  **Configure o Servidor Web:**
    - Aponte a raiz de documentos (`DocumentRoot`) do seu servidor para a pasta `public_html/`.

6.  **Pronto!**
    Acesse o site no seu navegador.