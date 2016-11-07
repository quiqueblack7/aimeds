<?php
include("funciones.php");


//RECORDATORIO DE PAGO PRIMERA guardia//ENVIAR CORREO PG
if(isset($_GET['mail1'])){
  date_default_timezone_set('Etc/UTC');
  require 'phpMailer/PHPMailerAutoload.php';
  $sql = "SELECT * FROM primeraguardia WHERE status=1 OR idUsuario='Lrodriguez07-1151'";
  $res = query($sql);
  while($cam = mysql_fetch_assoc($res)){
    foreach ($cam as $var => $val) { echo "$var => $val<br>"; ${$var} = $val; }
    $email=$correo;
    $nombre1 = "$nombre $apellidoP";
    $mensaje = "<div id='cuerpo'>
    	<p>
    	Te damos la más cordial bienvenida a nuestro primer “Curso – Taller ¿Qué hacer en mi primera guardia?”.
    	</p>
    	<p>
     		En el cual aprenderemos algunos de los procedimientos más utilizados en el campo intrahospitalario así como los conocimientos básicos sobre los mismos.
    		<br><br>Para mayor comodidad te sugerimos asistir con ropa cómoda y haber desayunado; la hora de inicio para ambos días es en punto de las 09:00 horas, por lo que se te pide que seas puntual.
    	</p>
    	<p>
    		La sede será la Escuela Superior de Medicina del Instituto Politécnico Nacional ubicada en la calle de Plan de San Luis y Díaz Mirón s/n, Col. Casco de Santo Tomas, delegación Miguel Hidalgo.
    	</p>
    	<p>
    		NOTA: Por cuestiones de logística se cambio el aula del evento, ahora se realizará en el Auditorio de Posgrado del edificio de Graduados 71, segundo piso.
        (Se adjuntó una imagen de la escuela para una mejor ubicación)
    	</p>
    	<p>
    		Si tienes alguna inquietud, no dudes en contactarnos a través de correo o redes sociales. ¡Te esperamos!
    	</p>
    </div>
    <style>
    	#cuerpo{
    		width: 600px;
    		margin: 0 auto;
    		font-family: Bariol;
    		border: 2px solid grey;
    		padding: 20px 40px 40px;
    	}
    	#cuerpo p:nth-child(1){
    	 font-size: 24px;
    	 color: #00a6b7;
    	 text-align: center;
    	 font-weight: bold;
    	 margin-bottom: 40px;
    	}
    	#cuerpo p:nth-child(2){font-size: 17px;}
    	#cuerpo p:nth-child(3){font-size: 17px;}
    	#cuerpo p:nth-child(4){font-size: 17px;}
    	#cuerpo p:nth-child(5){
    		font-size: 19px;
    		font-weight: bold;
    		text-align: center;
    		margin-top: 40px;
    	}
    </style>
    ";
    $mail = new PHPMailer;
    //$mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'aimeds.org';
    $mail->Port = 25;
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => true,'verify_peer_name' => false,'allow_self_signed' => true));
    $mail->SMTPSecure = 'none';
    $mail->SMTPAuth = true;
    $mail->Username = "eventos@aimeds.org";
    $mail->Password = "Eve2016_2";
    $mail->setFrom('eventos@aimeds.org', 'Eventos AIMEDS');
    //$mail->addReplyTo($correo, $nombre);
    $mail->Subject = 'Cambio de aula y recomendaciones';
    $mail->msgHTML($mensaje, dirname(__FILE__));
    $mail->AltBody = $mensaje;
    $mail->addAttachment('../images/mapaESM.jpg');
    $mail->addAddress("$email", "$nombre1");
    if ($mail->send()) { echo "ENVIADO $email<br><br>";  }
    else{ echo "NO ENVIADO $email<br><br>";   }
  }
}



//POSIBILIDAD DE PAGO #2 PG
if(isset($_GET['mail2'])){
  date_default_timezone_set('Etc/UTC');
  require 'phpMailer/PHPMailerAutoload.php';
  $sql = "SELECT * FROM primeraguardia WHERE status = 0 AND fecha < '2016-10-08'";
  $res = query($sql);
  while($cam = mysql_fetch_assoc($res)){
    foreach ($cam as $var => $val) { echo "$var => $val<br>"; ${$var} = $val; }
    echo "<br>";
    $email=$correo;
    $nombre1 = "$nombre $apellidoP";
    $mensaje = "<div id='cuerpo'>
      <p>
      No recibimos tu cuota del curso/taller.
      </p>
      <p>
        Pero aún estas a tiempo de completar tu registro y
        asistir al curso/taller ¿Qué hacer en mi primera guardia?.
      </p>
      <p>
        Recuerda que solo hay 50 lugares, no te quedes
        fuera y te esperamos este 15 y 16 de octubre.
      </p>
      <p>
        NOTA: Tienes hasta el día 13 de octubre de 2016 para realizar el deposito.
      </p>
      <p>
        Si tienes alguna duda, envía un correo a contacto@aimeds.org<br>
        Nosotros te responderemos en breve.
      </p>
    </div>
    <style>
      #cuerpo{
        width: 600px;
        margin: 0 auto;
        font-family: Bariol;
        border: 2px solid grey;
        padding: 20px 40px 40px;
      }
      #cuerpo p:nth-child(1){
       font-size: 24px;
       color: #00a6b7;
       text-align: center;
       font-weight: bold;
       margin-bottom: 40px;
      }
      #cuerpo p:nth-child(2){font-size: 17px;}
      #cuerpo p:nth-child(3){font-size: 17px;}
      #cuerpo p:nth-child(4){font-size: 17px;}
      #cuerpo p:nth-child(5){
        font-size: 19px;
        font-weight: bold;
        text-align: center;
        margin-top: 40px;
      }
    </style>
    ";
    $mail = new PHPMailer;
    //$mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'aimeds.org';
    $mail->Port = 25;
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => true,'verify_peer_name' => false,'allow_self_signed' => true));
    $mail->SMTPSecure = 'none';
    $mail->SMTPAuth = true;
    $mail->Username = "eventos@aimeds.org";
    $mail->Password = "Eve2016_2";
    $mail->setFrom('eventos@aimeds.org', 'Eventos AIMEDS');
    //$mail->addReplyTo($correo, $nombre);
    $mail->Subject = 'Recordatorio curso/taller';
    $mail->msgHTML($mensaje, dirname(__FILE__));
    $mail->AltBody = $mensaje;
    //$mail->addAttachment('images/phpmailer_mini.png');
    $mail->addAddress("$email", "$nombre1");
    if ($mail->send()) { echo "ENVIADO $email<br><br>";  }
    else{ echo "NO ENVIADO $email<br><br>";   }
  }
}



//USUARIOS AIMEDS INFO CURSO PG
if(isset($_GET['mail3'])){
  date_default_timezone_set('Etc/UTC');
  require 'phpMailer/PHPMailerAutoload.php';
  $sql = "SELECT * FROM usuarios";
  $res = query($sql);
  while($cam = mysql_fetch_assoc($res)){
    foreach ($cam as $var => $val) { echo "$var => $val<br>"; ${$var} = $val; }
    echo "<br>";
    $nombre1 = "$nombre $apellidoP";
    $mensaje = "<div id='cuerpo'>
      <p>
      Curso taller ¿Qué hacer en mi primera guardia?
      </p>
      <p>
        Dirigido a estudiantes de la carrera de Medicina que deseen adquirir conocimientos teórico-prácticos sobre los temas y procedimientos que realizarán con mayor frecuencia en el medio intrahospitalario.
      </p>
      <p>
        El curso/taller se llevará a cabo el sábado 15 y domingo 16 de octubre de 2016 en un horario de 09:00 a 15:00 hrs<br><br>
        Recuerda que solo hay 50 lugares, no te quedes fuera.
      </p>
      <p>
        Para mas información visita <a href='http://www.aimeds.org/primeraguardia'>aimeds.org/primeraguardia</a>
      </p>
      <p>
        Si tienes alguna duda, envía un correo a contacto@aimeds.org<br>
        Nosotros te responderemos en breve.
      </p>
    </div>
    <style>
      #cuerpo{
        width: 600px;
        margin: 0 auto;
        font-family: Bariol;
        border: 2px solid grey;
        padding: 20px 40px 40px;
      }
      #cuerpo p:nth-child(1){
       font-size: 24px;
       color: #00a6b7;
       text-align: center;
       font-weight: bold;
       margin-bottom: 40px;
      }
      #cuerpo p:nth-child(2){font-size: 17px;}
      #cuerpo p:nth-child(3){font-size: 17px;}
      #cuerpo p:nth-child(4){font-size: 17px;}
      #cuerpo p:nth-child(5){
        font-size: 19px;
        font-weight: bold;
        text-align: center;
        margin-top: 40px;
      }
    </style>
    ";
    $mail = new PHPMailer;
    //$mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'aimeds.org';
    $mail->Port = 25;
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => true,'verify_peer_name' => false,'allow_self_signed' => true));
    $mail->SMTPSecure = 'none';
    $mail->SMTPAuth = true;
    $mail->Username = "eventos@aimeds.org";
    $mail->Password = "Eve2016_2";
    $mail->setFrom('eventos@aimeds.org', 'Eventos AIMEDS');
    //$mail->addReplyTo($correo, $nombre);
    $mail->Subject = 'Curso/taller';
    $mail->msgHTML($mensaje, dirname(__FILE__));
    $mail->AltBody = $mensaje;
    //$mail->addAttachment('images/phpmailer_mini.png');
    $mail->addAddress("$email", "$nombre1");
    if ($mail->send()) { echo "ENVIADO $email<br><br>";  }
    else{ echo "NO ENVIADO $email<br><br>";   }
  }
}


?>
