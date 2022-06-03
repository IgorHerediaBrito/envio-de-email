<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP; //USA O SMTP PARA ENVIO DE EMAILS
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


//---------TUDO SÓ ACONTECE SE FOR VIA POST---------
if(isset($_POST['enviar'])) {
    
    $mail = new PHPMailer(true);

try {                   

    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'vini35634@gmail.com';                     
    $mail->Password   = 'vinicimol';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    
    
    $mail->setFrom('vini35634@gmail.com', 'Igor');//para qual email está enviado
    $mail->addAddress($_POST ['email']); //quem recebe o email, pode ser usado mais que um.
    $mail->addReplyTo('vini35634@gmail.com', 'Igor');//email de resposta

    
    $mail->isHTML(true);//se o formato do email vai ser html

    $mail->Subject = 'Mensagem via site - aula'; //assunto do email
    
    $body = "Mensagem enviada através do site, segue informações abaixo:<br>
    Nome: " . $_POST ['nome'] . "<br>
    Email: " . $_POST ['email'] . "<br>
    Mensagem: <br>" . $_POST['msg']; //mensagem do email
    
    /*
    -------UTILIZA TEXTO SEM HTML------
    $mail->AltBody  'somente em texto';
    */


    $mail->Body    = $body;//o email body recebe o $body 
    $mail->send(); //envia o email

    echo 'Enviado com sucesso!';

} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}
}else{
    echo "Erro ao enviar e-mail, acesso não foi via formulário";
};


/*Se tirar o if, da erro na validação do gmail*/
?>

