<?php
// enviar.php
$nome =addslashes($_POST['nome']);
$email = addslashes($_POST['email']);

$para = "guilhermeaalmeidze@gmail.com";
$assunto = "Confirmaçao de presença";

$corpo = "Nome:".$nome."\n"."email:".$email;

$cabecalho = "From: gwilhermejw@gmail.com "."\n". "reply-to: ".$email."\n". "X-Mailer: PHP/".phpversion();

if(mail($para, $assunto, $corpo, $cabecalho)){
    echo ("Email enviado com sucesso!");
} else {
    echo ("Erro ao enviar o email.");
}
?>