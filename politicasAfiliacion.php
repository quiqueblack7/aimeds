<?php
	if(isset($_GET['ref'])){ $ref = 1; }
	else $ref = 0;
?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div id='contenido' class="bariol">
      <img src='images/logo.png' width="150px">
      <div id='tiAP'>Políticas de afiliación</div>
      <p id='lAct'>(Última actualización: 27 de agosto de 2016)</p>
      <div id='conPA'>
      <p>
        El llenado de este formulario se realiza de manera voluntaria para ser
        afiliado de Asociación Internacional de Medicina y Salud A.C. de la que
        en lo posterior nos referiremos como AIMEDS A.C.
      </p>
      <p>Se define como afiliado a toda aquella persona que ingrese sus datos a
        través de éste formulario y realice el donativo anual correspondiente.
      </p>
      <p>El nombramiento de cualquier otra índole queda bajo el criterio de los
        miembros de la mesa directiva de AIMEDS A.C., el cual deberá ser
        debidamente requisitado y autorizado, recibiendo notificación por
        escrito por parte de la Dirección de Capital Humano de la misma.
      </p>
      <p>Los términos y condiciones para la afiliación así como monto del
        donativo anual queda a criterio de la mesa directiva de AIMEDS A.C. y
        son susceptibles a cambio sin previo aviso.
      </p>
			<table id='tPolAfi'>
				<thead>
					<tr>
						<th>Periodo</th>
						<th>Donativo</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>10 de septiembre de 2016</td><td>GRATIS*</td></tr>
					<tr><td>11 de septiembre de 2016 - 31 de diciembre de 2016</td><td>$100.00 MN anuales**</td></tr>
					<tr><td>A partir del 1 de enero de 2017</td><td>$200.00 MN anuales**</td></tr>
				</tbody>
			</table>
			<p>* La suscripción caducará el 31 de diciembre de 2016.</p>
			<p>**La afiliación es por 1 año natural a partir de la fecha en la que el usuario recibe su contraseña vía correo electrónico.</p>

    </div>

		<?php if($ref == 0) { ?>
			<p id='pBAP'><button id='bPA'>Aceptar</button></p>
		<?php } else { ?>
			<p id='pBAP'><button id='bPA2'>Aceptar</button></p>
			<?php } ?>

      </div>
  </div>
	<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
  <script src="js/funciones.js"></script>
</body
</html>
