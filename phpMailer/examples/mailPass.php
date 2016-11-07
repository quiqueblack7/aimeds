<?php

  date_default_timezone_set('Etc/UTC');
  require '../PHPMailerAutoload.php';
  include("../../php/funciones.php");
  $cont=1;
  $sql = "SELECT * FROM registro WHERE fechaReg='2016-09-10' OR
          idUsuario='Lrodriguez07-1151' OR idUsuario='Anoeggerath29-142' OR
          idUsuario = 'Mtrujano12-142'";
  $res = query($sql);
  while($cam = mysql_fetch_assoc($res)){
    echo "<br><br>";
    foreach($cam as $var => $val) { ${$var} = $val;  }
    echo "<br>";
    $sql1 = "SELECT * FROM usuarios WHERE idUsuario ='$idUsuario'";
    $res1 = query($sql1);
    $cam1 = mysql_fetch_assoc($res1);
    foreach($cam1 as $var => $val) { ${$var} = $val; }

    $up = "UPDATE login SET activo=1 WHERE idUsuario='$idUsuario'";
    $resup = query($up);

    $sql2 = "SELECT * FROM login WHERE idUsuario ='$idUsuario'";
    $res2 = query($sql2);
    $cam2 = mysql_fetch_assoc($res2);
    foreach($cam2 as $var => $val) { ${$var} = $val;  }

    $pass = getOPass($password);
    $mensaje ="
     <p style='width: 75%;
        text-align: center;
        font-size: 23px;
        margin: 0 auto;
        font-family: Century Gothic;
        letter-spacing: 2px;'>
          Gracias por unirte a AIMEDS y fortalecer tu desarrollo académico y profesional
      </p>
     <p style='width: 75%;
        text-align: center;
        font-size: 16px;
        margin: 20px auto;
        font-family: Century Gothic;'>
          Ya puedes ingresar al área de miembros con los siguientes datos:
      </p>
     <p style='width: 75%;
        text-align: center;
        font-size: 16px;
        margin: 20px auto;
        font-family: Century Gothic;'>Usuario: $idUsuario<br>Contraseña: $pass
    </p>
    <p style='width: 100%;
      text-align: center;
      font-size: 14px;
      font-family: century gothic;'>
        Si tienes alguna duda, envía un correo a contacto@aimeds.org<br>
        Te responderemos a la brevedad posible
    </p>
    <p style='width: 75%;
       text-align: center;
       font-size: 17px;
       margin: 10px auto;
       font-family: Century Gothic;
       letter-spacing: 2px;'>
         ASOCIACION INTERNACIONAL DE MEDICINA Y SALUD A.C.
     </p>
     ";
     $mensaje2 ="
      Gracias por unirte a AIMEDS y fortalecer tu desarrollo
       académico y profesional
      Ya puedes ingresar al área de miembros
      Tu nombre de usuario es: $idUsuario<br>Tu contraseña es: $pass
      Si tienes alguna duda, envía un correo a contacto@aimeds.org
      Te responderemos a la brevedad posible
      ";
    $mail = new PHPMailer;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'aimeds.org';
    $mail->Port = 25;
    $mail->Timeout=60;
    $mail->IsHTML(true);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => true,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->FromName="$nombre $apellidoP";
    $mail->SMTPSecure = 'none';
    $mail->SMTPAuth = true;
    $mail->Username = "contacto@aimeds.org";
    $mail->Password = "kF0vx72*";
    $mail->setFrom('contacto@aimeds.org', 'contacto@aimeds.org');
    $mail->Subject = 'Usuario y contraseña';
    $mail->Body="$mensaje";
    $mail->AltBody = "$mensaje2";
    //$mail->addAttachment('images/phpmailer_mini.png');
    $mail->addAddress("$email");

    if (!$mail->send()) {
      echo "<br>$cont ==> $nombre $apellidoP ==> $email ==> NO ENVIADO <br>";
      echo "Mailer Error: <br>";
    }
    else {
      echo "<br>$cont ==> $nombre $apellidoP ==> $email ==> ENVIADO <br>";
    }
$cont++;
  }



 ?>
