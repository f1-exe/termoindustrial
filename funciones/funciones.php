<?php 


//funcion que envia el correo con el contacto de la pagina
function enviarCorreoContacto(){

    require_once 'lib/sm/lib/swift_required.php';
  
    $pEmailGmail = '';
    $pPasswordGmail = '';
    $pFromName = ''; //display name
    $pTo = trim("");
    $pSubjetc = $asunto;
    $template = '';
  
    $pBody = file_get_contents($template);
  
    $transport = Swift_SmtpTransport::newInstance('')
  
            ->setUsername($pEmailGmail)
  
            ->setPassword($pPasswordGmail);
  
    $mMailer = Swift_Mailer::newInstance($transport);
    $mEmail = Swift_Message::newInstance();
    $mEmail->setSubject($pSubjetc);
    $mEmail->setTo($pTo);
    $mEmail->setFrom(array($pEmailGmail => $pFromName));
    $mEmail->setBody($pBody, 'text/html');
  
    if($mMailer->send($mEmail) == 1){
      return true;
    }else{
      return false;
    }
  }

?>