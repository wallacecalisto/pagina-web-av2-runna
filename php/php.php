<?php

// Composer
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Valida o e-mail
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Endereço de e-mail inválido.");
    }

    // Coleta e valida os dados do formulário
    $assunto   = htmlspecialchars(trim($_POST["assunto"]));
    $nome      = htmlspecialchars(trim($_POST["nome"]));
    $sobrenome = htmlspecialchars(trim($_POST["sobrenome"]));
    $message   = htmlspecialchars(trim($_POST["message"]));

    // Verifica campos obrigatórios
    if (empty($assunto) || empty($nome) || empty($sobrenome) || empty($message)) {
        die("Por favor, preencha todos os campos obrigatórios.");
    }

    // Configura o PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'seu email aqui'; 
        $mail->Password = 'sua senha aqui';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('seu email aqui', 'Runna');
        $mail->addAddress('seu email aqui');

        // Define assunto e corpo do e-mail
        $mail->isHTML(false);
        $mail->Subject = "Contato - Formulario Cliente Runna";
        $mail->Body    = "Assunto: $assunto\r\nNome: $nome $sobrenome\r\nEmail: $email\r\nMensagem:\r\n$message";

        // Envia o e-mail
        $mail->send();

        // Redireciona após sucesso
        header("Location: ../html/obrigado.html");
        exit;

    } catch (Exception $e) {
        die("Erro ao enviar o e-mail. Erro: {$mail->ErrorInfo}");
    }

} else {
    die("Acesso inválido.");
}
?>
