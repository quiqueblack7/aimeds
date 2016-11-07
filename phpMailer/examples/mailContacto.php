<?php
date_default_timezone_set('Etc/UTC');
require '../PHPMailerAutoload.php';
foreach ($_POST as $var => $val) { ${$var} = $val; }
$mail = new PHPMailer;
//$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->CharSet = 'UTF-8';
$mail->Host = 'aimeds.org';
$mail->Port = 25;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => true,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->SMTPSecure = 'none';
$mail->SMTPAuth = true;
$mail->Username = "contacto@aimeds.org";
$mail->Password = "Con2016_2";
$mail->setFrom('contacto@aimeds.org', 'Pagina seccion de contacto');
$mail->addReplyTo($correo, $nombre);
$mail->Subject = 'Contacto usuario';
$mail->msgHTML($mensaje, dirname(__FILE__));
$mail->AltBody = $mensaje;
//$mail->addAttachment('images/phpmailer_mini.png');
$mail->addAddress('contacto@aimeds.org', 'Contacto página');
if ($mail->send()) { ?>
  <form id='mailContacto' action="../../index.php#contact" method="POST">
    <input type="text" name="mnsj" value="mc1" hidden>
  </form>
<?phh }
else { ?>
  <form id='mailContacto' action="index.php/#contact" method="POST">
    <input type="text" name="mnsj" value="mc0" hidden>
  </form>
<?php } ?>
<script src="../../js/jquery-3.1.0.js"></script>
<script src="../../js/funciones.js"></script>
<script> sendMnsMC();</script>
