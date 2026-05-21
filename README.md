# 🌐 Runna — E-commerce de Artigos Esportivos

Este projeto foi desenvolvido em grupo como parte da avaliação (AV2) da disciplina de Desenvolvimento Web no 1º período do curso de Ciência da Computação na Universidade Veiga de Almeida (UVA). O objetivo foi criar uma loja virtual funcional de artigos esportivos.

### 👥 Minha Contribuição no Projeto
Dentro do grupo de 5 integrantes, fiquei responsável pelo desenvolvimento de ponta a ponta da **Seção de Contato**, integrando o visual da página a uma solução funcional de Back-end.

Minhas principais implementações foram:
- **Front-end:** Criação e estilização responsiva da página de formulário (`contato.html` e `css/contato.css`) com direito a banner em vídeo, validação de campos e um modal interativo para listar os telefones de suporte criado com JavaScript puro.
- **Lógica Back-end (PHP):** Processamento seguro dos dados do formulário utilizando o método `$_POST` com filtros de sanitização contra códigos maliciosos.
- **Disparo de E-mails Real:** Configuração da biblioteca **PHPMailer** conectada ao servidor **SMTP do Gmail** (usando *App Password*), fazendo com que as mensagens enviadas pelo site cheguem de verdade no e-mail cadastrado.

### 🛠️ Tecnologias que Pratiquei:
- HTML5 / CSS3 (Design Responsivo)
- JavaScript Puro (Manipulação de DOM e Eventos)
- PHP 8 (Lógica cliente-servidor)
- XAMPP (Ambiente de desenvolvimento local)
- Composer & PHPMailer (Gestão de dependências e integração de e-mail)

---

## ⚙️ Como rodar o projeto localmente

### Pré-requisitos
Você vai precisar do [XAMPP](https://www.apachefriends.org/) e do [Composer](https://getcomposer.org/) instalados na sua máquina.

### Passo a Passo

* Baixe os arquivos do projeto e coloque a pasta dentro do diretório `htdocs` do seu XAMPP:
    ```bash
    C:\xampp\htdocs\pagina-web-av2-runna
    ```

* Abra o terminal dentro da pasta do projeto e instale as dependências (isso vai recriar a pasta `vendor` automaticamente):
    ```bash
    composer install
    ```

* No arquivo `php/php.php`, configure as credenciais para o disparo de e-mails:
    ```php
    $mail->Username = 'seu-email-profissional@gmail.com';
    $mail->Password = 'sua-app-password-aqui'; // Gerada na sua Conta Google (Segurança > Senhas de app)
    $mail->setFrom('seu-email-profissional@gmail.com', 'Runna');
    $mail->addAddress('seu-email-profissional@gmail.com');
    ```

* Para o funcionamento da tela de login do projeto geral, importe o arquivo `sql/login.sql` no seu phpMyAdmin e verifique a conexão em `php/connection.php`.

* Inicie o Apache (e o MySQL) no painel do XAMPP e acesse no seu navegador:
    ```
    http://localhost/pagina-web-av2-runna/
    ```

---
*Nota: As mídias pesadas (vídeos de alta resolução e imagens grandes) foram removidas deste repositório para otimização de tamanho no GitHub. O sistema de rotas, envio de formulários e a lógica em PHP funcionam perfeitamente.*
