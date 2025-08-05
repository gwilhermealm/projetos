<?php

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Sanitização e validação dos dados
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Valida o e-mail para garantir que é um formato válido
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // 2. Configurações do E-mail
        $para = "guilhermealmeidze@gmail.com";
        $assunto = "Confirmação de presença - Aniversário da Nicolly";

        $corpo = "Confirmação de presença para o aniversário da Nicolly:\n\n";
        $corpo .= "Nome: " . $nome . "\n";
        $corpo .= "E-mail: " . $email . "\n";

        // 3. Cabeçalho do e-mail
        // Use um e-mail de remetente válido do seu servidor para evitar que a mensagem seja marcada como spam
        $cabecalho = "From: contato@seu-dominio.com" . "\r\n";
        $cabecalho .= "Reply-To: " . $email . "\r\n"; // Resposta será enviada para o e-mail do usuário
        $cabecalho .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; // Garante que caracteres especiais sejam exibidos corretamente

        // 4. Envio do E-mail e feedback para o usuário
        if (mail($para, $assunto, $corpo, $cabecalho)) {
            echo "Email enviado com sucesso! A sua presença foi confirmada.";
        } else {
            echo "Ops! Ocorreu um erro ao enviar a sua confirmação. Tente novamente mais tarde.";
        }
    } else {
        echo "O e-mail fornecido não é válido. Por favor, verifique e tente novamente.";
    }
} else {
    // Redireciona o usuário se ele tentar acessar o arquivo diretamente
    header("Location: /"); // Mude para o endereço do seu formulário
    exit();
}
?>