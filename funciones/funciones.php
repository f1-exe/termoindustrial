<?php 


//funcion que envia el correo con el contacto de la pagina
function enviarCorreoContacto($nombre,$telefono,$email,$mensajeDeContacto){
   
    require_once 'lib/sm/lib/swift_required.php';
  
    $pEmailGmail = 'noreply@termoindustrial.cl';
    $pPasswordGmail = 'termoindustrial2020.';
    $pFromName = 'De parte de ventas'; //display name
    $pTo = trim("noreply@termoindustrial.cl");
    $pSubjetc = 'Contacto WEB';
    $cuerpoEmail = '<h3>Ha llegado un nuevo mensaje desde la página web con la siguiente información</h3>
                    <br>
                    <ul>
                      <li>Nombre: '.$nombre.'</li>
                      <li>Teléfono: '.$telefono.'</li>
                      <li>Correo: '.$email.'</li>
                      <li>Mensaje de contacto :<br> '.$mensajeDeContacto.' </li>
                    </ul>'; 
    $transport = Swift_SmtpTransport::newInstance('mail.termoindustrial.cl', 587, "tls")
  
            ->setUsername($pEmailGmail)
  
            ->setPassword($pPasswordGmail);
  
    $mMailer = Swift_Mailer::newInstance($transport);
    $mEmail = Swift_Message::newInstance();
    $mEmail->setSubject($pSubjetc);
    $mEmail->setTo($pTo);
    $mEmail->setFrom(array($pEmailGmail => $pFromName));
    $mEmail->setBody($cuerpoEmail, 'text/html');
  
    if($mMailer->send($mEmail) == 1){
      return true;
    }else{
      return false;
    }
  }

?>