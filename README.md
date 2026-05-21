# Runna — E-commerce de Artigos Esportivos

Projeto acadêmico desenvolvido em grupo para a **AV2 da disciplina de Desenvolvimento Web**. O site simula uma loja virtual de artigos esportivos com navegação por categorias, sistema de login e página de contato funcional.

---

## 🖥️ Páginas do Projeto

| Página | Descrição |
|---|---|
| `index.html` | Home com banner em vídeo e destaques |
| `masculino.html` / `feminino.html` | Catálogos por gênero |
| `coleção.html` | Página de coleções especiais |
| `equipamentos.html` | Equipamentos esportivos |
| `contato.html` | Formulário de contato com envio de e-mail |
| `login.php` | Autenticação de usuários com banco de dados |
| `sobre.html` | Página institucional |

---

## 👤 Minha Contribuição — Página de Contato

Fui responsável pelo desenvolvimento completo da **página de contato** (`contato.html`), do back-end de envio de e-mail (`php/php.php`) e da estilização dedicada (`css/contato.css`).

### O que implementei

**Front-end (HTML + CSS + JavaScript)**
- Layout responsivo com banner em vídeo em tela cheia
- Modal interativo com lista de telefones por setor (SAC, Trocas, Parcerias etc.), acionado via JavaScript puro
- Formulário de contato com campos validados no front-end (nome, sobrenome, e-mail, assunto e mensagem)
- Menu hambúrguer para navegação mobile, integrado ao JavaScript global do projeto

**Back-end (PHP)**
- Processamento do formulário via `$_POST` com validação e sanitização dos dados (`filter_var`, `htmlspecialchars`)
- Envio de e-mail funcional utilizando a biblioteca **PHPMailer** com autenticação SMTP via Gmail
- Redirecionamento para página de confirmação (`obrigado.html`) após envio bem-sucedido
- Tratamento de erros com mensagens descritivas

### Tecnologias utilizadas
- HTML5
- CSS3 (responsivo)
- JavaScript (DOM, eventos, modal)
- PHP 8
- PHPMailer 6.9 (via Composer)
- SMTP Gmail com App Password

---

## ⚙️ Como rodar localmente

### Pré-requisitos
- [XAMPP](https://www.apachefriends.org/) (ou outro servidor com PHP)
- [Composer](https://getcomposer.org/)

### Passos

1. Clone o repositório dentro da pasta `htdocs` do XAMPP:
```bash
git clone https://github.com/seu-usuario/Runna.git
cd Runna
```

2. Instale as dependências PHP:
```bash
composer install
```

3. Configure as credenciais de e-mail em `php/php.php`:
```php
$mail->Username = 'seu-email@gmail.com';
$mail->Password = 'sua-app-password-aqui';
$mail->setFrom('seu-email@gmail.com', 'Runna');
$mail->addAddress('seu-email@gmail.com');
```
> Para gerar uma App Password do Google: [myaccount.google.com](https://myaccount.google.com) → Segurança → Senhas de app

4. Configure o banco de dados (para o sistema de login):
   - Importe o arquivo `sql/login.sql` no phpMyAdmin
   - Verifique as credenciais em `php/connection.php`

5. Inicie o Apache (e MySQL, se for usar o login) no XAMPP e acesse:
```
http://localhost/Runna/
```

> **Nota:** As mídias (vídeos e imagens) não estão incluídas no repositório por conta do tamanho dos arquivos. O site funciona normalmente sem elas, apenas sem os elementos visuais de vídeo.

---

## 👥 Equipe

Projeto desenvolvido por 5 integrantes. Cada membro ficou responsável por uma parte do site:

| Membro | Responsabilidade |
|---|---|
| [Seu nome] | Página de Contato (HTML, CSS, JS, PHP) |
| Integrante 2 | — |
| Integrante 3 | — |
| Integrante 4 | — |
| Integrante 5 | — |

---

## 📚 Disciplina

> Desenvolvimento Web — AV2  
> Curso: [nome do curso]  
> Instituição: [nome da faculdade]
