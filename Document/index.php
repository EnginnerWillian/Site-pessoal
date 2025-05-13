<?php
    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefoe = addcslashes($_POST['telefone']);

    $para = "williansuportetech.com";
    $assunto = "Coleta de dadosn- Inteliogia";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: williansuportetech@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }
    else{
        echo("Erro ao enviar seu email!");
    }
?> 