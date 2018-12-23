<?php
    
    if(isset($_POST['email']) && !empty($_POST['email'])) {

        $nome = addslashes($_POST['name']);
        $mail = addslashes($_POST['email']);
        $message = addslashes($_POST['message']);

        $to = "contato@wesleymends.com.br";
        $subject = "Contato - Wesley Mendes";
        $body = "Nome: ".$nome."\r\n".
                "E-mail".$mail."\r\n".
                "Mensagem".$message;

        $header = "From:news@wesleymends.com.br"."\r\n".
                    "Reply-To:".$mail."\r\n".
                    "X=Mailer:PHP/".phpversion();
    
        if(mail($to, $subject, $body, $header)) {
            echo("E-mail enviado com sucesso!");
        } else {
            echo("O E-mail não pode ser enviado.");
        }
    }
    
?>