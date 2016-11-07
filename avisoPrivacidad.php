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
	<div id='contenido' class='bariol'>
      <img src='images/logo.png' width="150px">
      <div id='tiAP'>Aviso de privacidad</div>
					<div id='contAP'>
          <p><b>¿Quiénes somos?</b></p>
          <p>
            Asociación Internacional de Medicina y Salud A.C., mejor conocido como
            AIMEDS, con domicilio en calle De Las Misiones 38-B, colonia Cofradía
            de San Miguel II, ciudad de México, municipio o delegación Cuautitlán
            Izcalli, cp. 54768, en la entidad de Estado de México, país México, y
            portal de internet www.aimeds.org, es el responsable del uso y protección
            de sus datos personales, y al respecto le informamos lo siguiente:
          </p>
          <p><b>¿Para qué fines utilizaremos sus datos personales?</b></p>
          <p>
            Los datos personales que recabamos de usted, los utilizaremos para
            las siguientes finalidades que son necesarias para el servicio que solicita:
            <ul>
							<li>Llevar a cabo la afiliación del solicitante la asociación.</li>
							<li>Generar un perfil de afiliación para dar a conocer personalmente los beneficios de pertenecer a la asociación.</li>
						</ul>
            <p>De manera adicional, utilizaremos su información personal para las
            siguientes finalidades secundarias que <b>no son necesarias</b> para el
            servicio solicitado, pero que nos permiten y facilitan
            brindarle una mejor atención:</p>
            <ul>
            <li>Contactar y solicitar servicios de los afiliados</li>
            <li>Mercadotecnia o publicitaria</li>
            <li>Prospección comercial</li>
          </ul>
            <p> En caso de que no desee que sus datos personales sean tratados para
						estos fines secundarios, desde este momento usted nos puede
						comunicar lo anterior a través del siguiente mecanismo:</p>
            <p>Contactarnos en afiliación@aimeds.org</p>
            <p>La negativa para el uso de sus datos personales para estas
            finalidades no podrá ser un motivo para que le neguemos los servicios
            y productos que solicita o contrata con nosotros.</p>
          </p>
          <p><b>¿Dónde puedo consultar el aviso de privacidad integral?</b></p>
          <p>
            Para conocer mayor información sobre los términos y condiciones en
            que serán tratados sus datos personales, como los terceros con
            quienes compartimos su información personal y la forma en que podrá
            ejercer sus derechos ARCO, puede consultar el aviso de privacidad integral en:
            <p>Internet</p>
						<p><b>El presente aviso de privacidad se encuentra elaborado con base en:</b></p>
						<p>-Ley Federal de Protección de Datos Personales en Posesión de los
							Particulares.<br>
							-Reglamento de la Ley Federal de Protección de Datos Personales en
							 Posesión de los Particulares.<br>
							-Lineamientos del aviso de privacidad.</p>
          </p>
				</div>
      <?php if($ref == 0) { ?>
				<p id='pBAP'><button id='bAP'>Aceptar</button></p>
			<?php } else { ?>
				<p id='pBAP'><button id='bAP2'>Aceptar</button></p>
				<?php } ?>
      </div>
  </div>
	<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
  <script src="js/funciones.js"></script>
</body
</html>
