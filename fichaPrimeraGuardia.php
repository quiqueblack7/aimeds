<?php
  include("php/funciones.php");
  if(isset($_SESSION['idUsuarioPG'])){
    foreach ($_SESSION as $var => $val) { ${$var} = $val; }
    }
  else header("Location: registroPrimeraGuardia.php");
  if($tipoPG==1) $precio = "$250.00 M.N.";
  if($tipoPG==2) $precio = "$400.00 M.N.";

  unset($_SESSION['idUsuarioPG']);

  $sql = "SELECT * FROM primeraguardia";
  $res = query($sql);
  $row = mysql_num_rows($res);
  //$row = 51;

  $fecha = date('Y-m-d');
  $nfecha = strtotime ( '+3 day' , strtotime ( $fecha ) ) ;
  $dia = date('d',$nfecha);
  $mes = date('m',$nfecha) * 1 - 1;

  $meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto',
  'septiempre','octubre','noviembre','diciembre');
  $fechaN = $dia." de ".$meses[$mes];

?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="stylesheet" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
  <script src="js/preFunciones.js"></script>
</head>
<body class='bodyFicha'>
	<div class='menuFicha'><img id='logoFicha' src='images/logoWhite.png'></div>
	<div id='contenido'>
		<div id='hideTittle'>Asociación Internacinal de Medicina y Salud A.C.</div>
    <div class='ficha' style="height: 600px !important;">
      <div class='tFicha'>
        ¿Qué hacer en mi primera guardia?<br>

      <?php if($row<=50){ ?>  Para finalizar el registro favor de seguir los siguientes pasos. <?php } ?>
      </div>
        <div class='ulFicha'>
        <ul>
          <?php if($row<=50) { ?>
          <li>
            Depositar la cuota de recuperación en la cuenta 92-00212923-8 de
            Santander por la cantidad de <?php echo $precio; ?> con la referencia
            "<?php echo $idUsuarioPG; ?>" antes del día <?php echo $fechaN; ?>.
          </li>
          <li>Enviar el comprobante generado por el banco al correo
						eventos@aimeds.org con la referencia como asunto.</li>
          <li>
            Esperar el correo de confirmación
            <?php if(isset($_GET['afi'])) echo " y nueva contraseña para acceder al sitio "; ?>
            (2-3 días hábiles a partir del
            envío del comprobante).
          </li>
          <li>
            <b>NOTA:</b> Ya que el cupo es limitado te pedimos que deposites la cuota
            de recuperacíon antes del día mencionado, de lo contrario perderás
            tu lugar.
          </li>
          <?php } else{ ?>
            <li>
              Gracias por registrarte al curso, desafortunadamente el cupo ha
              llegado a su límite pero haz entrado en lista de espera.
            </li>
            <li>
              En caso de que se abrán nuevos lugares te lo haremos saber
              por correo electrónico.
            </li>
            <li>

            </li>
          <?php } ?>
        </ul>

      </div>
        <div class='foFicha'>
          Si tienes alguna duda, envía  un correo a contacto@aimeds.org<br>
					Nosotros te responderemos en breve.
        </div>
				<div class='bFicha'>
					<button id='imFicha2' class='botFicha'>Imprimir</button>
					<a href='registroPrimeraGuardia.php' style="text-decoration: none;">
            <button class='botFicha'>Regresar</button>
          </a>
          <?php if($row<=50) { ?>
          <p style="font-family: bariol; font-size: 15px;">
            Información enviada al correo proporcionado<br>
            (Puede llegar a la bandeja de correo no deseado)
          </p>
          <?php } ?>
				</div>
      </div>
    </div>
  </div>

  <script src="js/funciones.js"></script>
  <script> changeBody(1); </script>
</body>
</html>
