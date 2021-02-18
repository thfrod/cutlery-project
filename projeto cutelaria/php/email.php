<?php


if (isset($_POST['email']) && !empty($_POST['email'])){
    $name =  addslashes($_POST['name']);
    $message = addslashes($_POST['message']);
    $email = addslashes($_POST['email']);

    $para = "contatoCutelaria@gmail.com";
    $subjet = "Contato Site - Cutelaria";
    $bodymail=  'Nome: '.$name.PHP_EOL . 
                'Email: '.$email. PHP_EOL .
                'Mensagem: '.$message;
    $header =   "From:contatoCutelaria@gmail.com" . PHP_EOL .
                'Reply-To:' .$email . PHP_EOL.
                "X=Mailer:PHP/". phpversion();


    if(mail($to,$subject,$bodymail,$header)){
        echo ("Enviado com sucesso!");

    }
    else{
        echo ("Ouve um erro, o e-mail não pode ser enviado");
    }



}




?>