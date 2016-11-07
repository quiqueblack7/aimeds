<?php
  include("../php/funciones.php");
  if(!isset($_SESSION['idUsuario'])) {  header("Location: ../index.php#afiliados"); }
  else $idUsuario = $_SESSION['idUsuario'];

  if(isset($_GET['error'])) $error=1;
  else $error =0;

  $sql = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";
  $res = query($sql);
  $cam = mysql_fetch_assoc($res);
  foreach ($cam as $var => $val) { ${$var} = $val; }
  $nombreC = "$nombre $apellidoP";

  $sql = "SELECT * FROM beca WHERE idUsuario = '$idUsuario'";
  $res = query($sql);
  $row = mysql_num_rows($res);

?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<link rel="icon" type="image/png" href="../images/icon.png">
	<link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body id='bodyUsuario' class="beca">
	<div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='../images/logoWhite.png'></a>
    <p class='menuUser' id='salirU'>SALIR <i class="fa fa-sign-out"></i></p>
    <p class='menuUser'><a href="index.php">HOME <i class="fa fa-home"></i></a></p>
	</div>

  <div id='contBeca'>
    <?php if($error==1){ ?>
      <p class='mnsjB1'>Hubo un error al solicitar tu beca, envía un correo a contacto@aimeds.org para cualquier aclaración</p>
    <?php } ?>
    <p id='titB'>Beca quinto "Curso guías instruccionales en
    Ginecología y Obstetricia para médicos de 1er contacto"</p>

    <p id='normalP'>El evento quinto "Curso guías instruccionales en
    Ginecología y Obstetricia para médicos de 1er contacto"
    se realizará los dias 5, 6 y 7 de octubre de 2016 con un costo de
    <b>$1,500.00 MNX</b>

    <p id='aBeca'><a href='../eventos.php?Evento=Proximo_1' target="_blank">Ver detalle del evento</a></p>

    <p id='normalP'>Si quieres asistir sin pagar dicha cantidad, contamos con 30 becas
      del 100% que serán sorteadas entre los miembros de AIMEDS.
    </p>

    <p id='normalP'>Solo tienes que dar clic en el botón "Solicitar beca" que se encuentra
      mas abajo, no dejes pasar esta oportunidad.
    </p>

    <?php if($row!=1){ ?>
      <p id='solBeca'>Solicitar beca</p>
      <?php } ?>
    <?php if($row==1){ ?>
      <p id='petBeca'>Beca solicitada</p>
      <p id='normalP' class='center yell'>Se informará a los ganadores de la beca por correo electrónico,
        mantente al tanto.
      </p>
    <?php } ?>
  </p>
  </div>
  <script src='../js/jquery-3.1.0.js'></script>
  <script src='../js/funciones.js'></script>
</body>
</html>
