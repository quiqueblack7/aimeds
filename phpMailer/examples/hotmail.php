<?php
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$folio = $_GET['folio'];
$div = "<style>#titleR{
  font-size: 25px;
  letter-spacing: 4px;
  text-align: center;
  padding-top: 10px;
}
#cent { text-align: center;}
#fichaDatos{ font-size: 18px; text-align: center;}
</style>
<div id='titleR'>Pre-registro completado con &eacute;xito</div><br>
  <div id='fichaDatos'>
    Estimado(a) $nombre su n&uacute;mero de folio es: $folio<br>
</div>
<div id='fichaDatos'>Se ha adjuntado el programa del evento en este mismo correo
<br>Recuerde que es importante que lleve su folio el d&iacute;a del evento para finalizar su registro</div>
<div id='cent'><img src='cid:attach'></div>";
date_default_timezone_set('Etc/UTC');
require '../PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'bestlightmexico.com.mx';
$mail->Port = 25;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "foro@bestlightmexico.com.mx";
$mail->Password = "Xjm73_l5";
$mail->setFrom('moviendotusalud2016@gmail.com', 'Foro moviendo tu salud 2016');
$mail->Subject = 'Folio de pre-registro';
$mail->AddEmbeddedImage("images/logoSSP.png", "attach", "logoSSP.png");
$mail->Body = "$div";
$mail->AltBody = "Su registro de ha completado con &eacute;xito";
$mail->addAttachment('programaForo2016.pdf');
$mail->addAddress("$correo", "$nombre");
if (!$mail->send()) { echo "Mailer Error: "; }
else { echo "Registro completado con exito"; }
//Header("Location: http://moviendotusalud2016.orgfree.com/ficha.php?registro=1&idRegistro=$folio");
echo "
<html>
<head>
<meta http-equiv='Refresh' content='0;url=http://moviendotusalud2016.orgfree.com/ficha.php?registro=1&idRegistro=$folio'>
</head>
";
?>
