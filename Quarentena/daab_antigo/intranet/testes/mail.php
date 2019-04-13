<?php

//echo "<script> alert('EMAIL - entrada'); </script>";

/*
require_once("/classes/PHPMailer.php"); //chama a classe de onde você a colocou.

$mail = new PHPMailer(""); // instancia a classe PHPMailer

$mail->IsSMTP();

//configuração do gmail
$mail->Port = '465'; //porta usada pelo gmail.
$mail->Host = 'smtp.gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'ssl';

//configuração do usuário do gmail
$mail->SMTPAuth = true; 
$mail->Username = 'augustusborges@gmail.com'; // usuario gmail.   
$mail->Password = 'P@ula2611'; // senha do email.

$mail->SingleTo = true; 

// configuração do email a ver enviado.
$mail->From = "Mensagem de email, pode vir por uma variavel."; 
$mail->FromName = "Alexandre."; 

$mail->addAddress("alexandre@daab.com.br"); // email do destinatario.

$mail->Subject = "Aqui vai o assunto do email, pode vim atraves de variavel."; 
$mail->Body = "Aqui vai a mensagem, que tambem pode vim por variavel.";
if(!$mail->Send())
    echo "Erro ao enviar Email:" . $mail->ErrorInfo;
*/


//first_mail.php
$mail_to ="alexandre@daab.com.br";
$mail_subject = "Envio Email via sistema PHP";
$mail_body = "We'll have a meeting next Wednesday.\n";
$mail_body .= "7 P.M. in Judy's Office.\n";
$mail_body .= "Oh, BYOB!\n";
if(mail($mail_to, $mail_subject, utf8_encode($mail_body)))
echo "Successfully sent the e-mail \"$mail_subject\" to $mail_to.";
else echo "Failed to send the e-mail \"$mail_subject\"."
?>