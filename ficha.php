<?php
include("php/funciones.php");
if(isset($_SESSION['ref'])) $ref = $_SESSION['ref'];
else header("Location: registro.php");
?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body class='bodyFicha'>
	<div class='menuFicha'><img id='logoFicha' src='images/logoWhite.png'></div>
	<div id='contenido'>
		<div id='hideTittle'>Asociación Internacinal de Medicina y Salud A.C.</div>
    <div class='ficha'>
      <div class='tFicha'>Para finalizar su registro de manera exitosa, favor de seguir los siguentes pasos:</div>
        <div class='ulFicha'><ul>
          <li>
            Deposita tu donativo en la cuenta 92-00212923-8 de Santander por
					  la cantidad de $100.00 M.N. con la referencia "<?php echo $ref; ?>".
          </li>
          <li>Enviar el comprobante del donativo generado por el banco al correo
						afiliacion@aimeds.org con la referencia como asunto.</li>
          <li>
            Esperar el correo de confirmación y nueva contraseña para
            acceder al sitio (2-3 días hábiles a partir del envío del comprobante).
          </li>
        </ul></div>
        <div class='foFicha'>
          Si tienes alguna duda, envía  un correo a contacto@aimeds.org<br>
					Nosotros te responderemos en breve.
        </div>
				<div class='bFicha'>
					<button id='imFicha' class='botFicha'>Imprimir</button>
					<button id='saFicha' class='botFicha'>Regresar</button>
				</div>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.1.0.js"></script>
  <script src="js/funciones.js"></script>
</body>
</html>
