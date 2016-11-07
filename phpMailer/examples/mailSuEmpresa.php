<?php
$to = "quiqueblack743@gmail.com";
$nameto = "Quique";
$from = "sistemas@bestlightmexico.com.mx";
$namefrom = "Enrique Rodriguez";
$subject = "Prueba correo";
$message = "HOLI";


authSendEmail ($from, $namefrom, $to, $nameto, $subject, $message);
?>

<?php
/* * * * * * * * * * * * * * Funciones de envío de correo * * * * * * * * * * * * * */

function authSendEmail($from, $namefrom, $to, $nameto, $subject, $message)
{
//SMTP + Detalles del servidor
/* * * * Inicia configuración * * * */
$smtpServer = "bestlightmexico.com.mx";
$port = "25";
$timeout = "30";
$username = "sistemas@bestlightmexico.com.mx";
$password = "sis123temas";
$localhost = "localhost";
$newLine = "\r\n";
/* * * * Termina configuración * * * * */

//Conexión al servidor en el puerto específico
$smtpConnect = fsockopen($smtpServer, $port, $errno, $errstr, $timeout);
$smtpResponse = fgets($smtpConnect, 515);
if(empty($smtpConnect))
{
$output = "Failed to connect: $smtpResponse";
return $output;
}
else
{
$logArray['connection'] = "Connected: $smtpResponse";
}

//Solicitud de logueo
fputs($smtpConnect,"AUTH LOGIN" . $newLine);
$smtpResponse = fgets($smtpConnect, 515);
$logArray['authrequest'] = "$smtpResponse";

//Envío de usuario
fputs($smtpConnect, base64_encode($username) . $newLine);
$smtpResponse = fgets($smtpConnect, 515);
$logArray['authusername'] = "$smtpResponse";

//Envío de password
fputs($smtpConnect, base64_encode($password) . $newLine);
$smtpResponse = fgets($smtpConnect, 515);
$logArray['authpassword'] = "$smtpResponse";

//Saludo a SMTP
fputs($smtpConnect, "HELO $localhost" . $newLine);
$smtpResponse = fgets($smtpConnect, 515);
$logArray['heloresponse'] = "$smtpResponse";

//Envía correo desde
fputs($smtpConnect, "MAIL FROM: $from" . $newLine);
$smtpResponse = fgets($smtpConnect, 515);
$logArray['mailfromresponse'] = "$smtpResponse";

//Envía correo a
fputs($smtpConnect, "RCPT TO: $to" . $newLine);
$smtpResponse = fgets($smtpConnect, 515);
$logArray['mailtoresponse'] = "$smtpResponse";

//Cuerpo del mensaje
fputs($smtpConnect, "DATA" . $newLine);
$smtpResponse = fgets($smtpConnect, 515);
$logArray['data1response'] = "$smtpResponse";

//Construyendo encabezados
$headers = "MIME-Version: 1.0" . $newLine;
$headers .= "Content-type: text/html; charset=iso-8859-1" . $newLine;
$headers .= "To: $nameto <$to>" . $newLine;
$headers .= "From: $namefrom <$from>" . $newLine;


fputs($smtpConnect, "To: $to\nFrom: $from\nSubject: $subject\n$headers\n\n$message\n.\n");
$smtpResponse = fgets($smtpConnect, 515);
$logArray['data2response'] = "$smtpResponse";

//Despedida a SMTP
fputs($smtpConnect,"QUIT" . $newLine);
$smtpResponse = fgets($smtpConnect, 515);
$logArray['quitresponse'] = "$smtpResponse";
}
//header(location'http://mexicoled.com/'); exit;
//SuEmpresa.com una división de Interplanet S.A. de C.V.
//Servicios de Internet para negocios.
?>
