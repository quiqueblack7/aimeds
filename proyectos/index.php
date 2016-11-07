<?php
include("../php/funciones.php");
if(isset($_SESSION['idProy'])) header("Location: proyectos.php");
?>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>AIMEDS</title>
	<link rel="icon" type="image/png" href="../images/icon.png">
	<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
  <script type="text/javascript" src="../js/jquery-3.1.0.js"></script>
  <script src="../js/preFunciones.js"></script>
</head>
<body class='bodyProy'>
	<div class='menuFicha'>
		<a href='../'><img id='logoFicha' src='../images/logoWhite.png'></a>
	</div>

  <p id='titIP'>Selecciona la opción deseada.</p>
  <div id='cuerpoIProy'>
    <a href='proyectos.php'><button class='btnC'>Nuevo proyecto</button></a>
    <a href='?option=2ndChoice'><button class='btnC'>Proyecto existente</button></a>
  </div>

  <?php if(isset($_GET['option'])){ ?>

    <div id='datProy'>
      <p>Introduce tu ID de proyecto</p>
      <input type='text' id='idProy'><br>
      <input type='button' value='Enviar' id='sendP'>
    </div>

  <?php } ?>

<script src="../js/funciones.js"></script>
</body>
</html>
